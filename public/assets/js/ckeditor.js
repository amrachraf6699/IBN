const {
    DecoupledEditor,
    ClassicEditor,
    Plugin,
    ButtonView,
    Alignment,
    AutoImage,
    AutoLink,
    Autosave,
    BalloonToolbar,
    Bold,
    Bookmark,
    CKBox,
    CKBoxImageEdit,
    CloudServices,
    Code,
    Essentials,
    FontBackgroundColor,
    FontColor,
    FontFamily,
    FontSize,
    Heading,
    HorizontalLine,
    ImageBlock,
    ImageCaption,
    ImageEditing,
    ImageInline,
    ImageInsert,
    ImageInsertViaUrl,
    ImageResize,
    ImageStyle,
    ImageTextAlternative,
    ImageToolbar,
    ImageUpload,
    ImageUtils,
    MediaEmbed,
    Indent,
    IndentBlock,
    Italic,
    Link,
    LinkImage,
    List,
    ListProperties,
    PageBreak,
    Paragraph,
    PasteFromOffice,
    PictureEditing,
    RemoveFormat,
    Strikethrough,
    Subscript,
    Superscript,
    Table,
    TableCaption,
    TableCellProperties,
    TableColumnResize,
    TableProperties,
    TableToolbar,
    TodoList,
    Underline,
} = window.CKEDITOR;

const {
    // DocumentOutline,
    ExportPdf,
    ExportWord,
    ImportWord,
} = window.CKEDITOR_PREMIUM_FEATURES;

const LICENSE_KEY = window.config.CKEDITOR_LICENSE_KEY;
const CLOUD_SERVICES_TOKEN_URL =
    window.config.CKEDITOR_CLOUD_SERVICES_TOKEN_URL;

/**
 * The `DocumentOutlineToggler` plugin adds an icon to the left side of the editor.
 *
 * It allows to toggle document outline visibility.
 */
// class DocumentOutlineToggler extends Plugin {
//     static get pluginName() {
//         return "DocumentOutlineToggler";
//     }

//     init() {
//         this.toggleButton = new ButtonView(this.editor.locale);

//         const DOCUMENT_OUTLINE_ICON =
//             '<svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 9.5a.5.5 0 0 0 .5-.5v-.5A.5.5 0 0 0 5 8H3.5a.5.5 0 0 0-.5.5V9a.5.5 0 0 0 .5.5H5Z"/><path d="M5.5 12a.5.5 0 0 1-.5.5H3.5A.5.5 0 0 1 3 12v-.5a.5.5 0 0 1 .5-.5H5a.5.5 0 0 1 .5.5v.5Z"/><path d="M5 6.5a.5.5 0 0 0 .5-.5v-.5A.5.5 0 0 0 5 5H3.5a.5.5 0 0 0-.5.5V6a.5.5 0 0 0 .5.5H5Z"/><path clip-rule="evenodd" d="M2 19a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H2Zm6-1.5h10a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5H8v15Zm-1.5-15H2a.5.5 0 0 0-.5.5v14a.5.5 0 0 0 .5.5h4.5v-15Z"/></svg>';
//         const COLLAPSE_OUTLINE_ICON =
//             '<svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M11.463 5.187a.888.888 0 1 1 1.254 1.255L9.16 10l3.557 3.557a.888.888 0 1 1-1.254 1.255L7.26 10.61a.888.888 0 0 1 .16-1.382l4.043-4.042z"/></svg>';

//         const documentOutlineContainer = this.editor.config.get(
//             "documentOutline.container"
//         );
//         const sidebarContainer = documentOutlineContainer.parentElement;

//         this.toggleButton.set({
//             label: "Toggle document outline",
//             tooltip: "Hide document outline",
//             tooltipPosition: "se",
//             icon: COLLAPSE_OUTLINE_ICON,
//         });

//         this.toggleButton.on("execute", () => {
//             // Toggle a CSS class on the document outline container to manage the visibility of the outline.
//             documentOutlineContainer.classList.toggle("ck-hidden");

//             // Change the look of the button to reflect the state of the document outline feature.
//             if (documentOutlineContainer.classList.contains("ck-hidden")) {
//                 this.toggleButton.icon = DOCUMENT_OUTLINE_ICON;
//                 this.toggleButton.tooltip = "Show document outline";
//             } else {
//                 this.toggleButton.icon = COLLAPSE_OUTLINE_ICON;
//                 this.toggleButton.tooltip = "Hide document outline";
//             }

//             // Keep the focus in the editor whenever the button is clicked.
//             this.editor.editing.view.focus();
//         });

//         this.toggleButton.render();

//         sidebarContainer.insertBefore(
//             this.toggleButton.element,
//             documentOutlineContainer
//         );
//     }

//     destroy() {
//         this.toggleButton.element.remove();

//         return super.destroy();
//     }
// }

function MyUploadAdapterPlugin(editor) {
    editor.plugins.get("FileRepository").createUploadAdapter = (loader) => {
        return {
            upload: async () => {
                return new Promise((resolve, reject) => {
                    const reader = new FileReader();
                    reader.readAsDataURL(loader.file);

                    reader.onload = () => {
                        const videoUrl = reader.result; // Convert file to base64 URL
                        resolve({ default: videoUrl });
                    };

                    reader.onerror = (error) => reject(error);
                });
            },
        };
    };
}

class InsertVideoPlugin extends Plugin {
    init() {
        const editor = this.editor;

        editor.model.schema.register("video", {
            allowWhere: "$block",
            allowAttributes: ["src", "controls"],
            isObject: true,
        });

        editor.conversion.for("upcast").elementToElement({
            model: "video",
            view: {
                name: "video",
            },
        });

        editor.conversion.for("dataDowncast").elementToElement({
            model: "video",
            view: (modelElement, { writer }) => {
                return writer.createEmptyElement("video", {
                    src: modelElement.getAttribute("src"),
                    controls: "controls",
                    style: "max-width:100%",
                });
            },
        });

        editor.conversion.for("editingDowncast").elementToElement({
            model: "video",
            view: (modelElement, { writer }) => {
                const videoElement = writer.createEmptyElement("video", {
                    src: modelElement.getAttribute("src"),
                    controls: "controls",
                    style: "max-width:100%",
                });

                return videoElement;
            },
        });

        editor.ui.componentFactory.add("uploadVideo", (locale) => {
            const button = new ButtonView(locale);
            const INSERT_VIDEO_ICON =
                '<svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 4.5A2.5 2.5 0 0 1 4.5 2h11A2.5 2.5 0 0 1 18 4.5v11a2.5 2.5 0 0 1-2.5 2.5h-11A2.5 2.5 0 0 1 2 15.5v-11ZM10 7.25a.75.75 0 0 0-1.125.65v4.2a.75.75 0 0 0 1.125.65l3.5-2.1a.75.75 0 0 0 0-1.3l-3.5-2.1Z"/></svg>';

            button.set({
                label: "Upload Video",
                icon: INSERT_VIDEO_ICON,
                tooltip: true,
            });

            button.on("execute", () => {
                const input = document.createElement("input");
                input.type = "file";
                input.accept = "video/*";
                input.click();

                input.addEventListener("change", () => {
                    const file = input.files[0];

                    if (file) {
                        const reader = new FileReader();
                        reader.readAsDataURL(file);

                        reader.onload = () => {
                            editor.model.change((writer) => {
                                const videoElement = writer.createElement(
                                    "video",
                                    {
                                        src: reader.result,
                                    }
                                );

                                editor.model.insertContent(videoElement);
                            });
                        };
                    }
                });
            });

            return button;
        });
    }
}

const editorConfig = {
    toolbar: {
        items: [
            "previousPage",
            "nextPage",
            "|",
            "heading",
            "|",
            "fontSize",
            "fontFamily",
            "fontColor",
            "fontBackgroundColor",
            "|",
            "bold",
            "italic",
            "underline",
            "|",
            "link",
            "insertImage",
            "mediaEmbed",
            "uploadVideo", // Custom video insert button
            "insertTable",
            "|",
            "alignment",
            "|",
            "bulletedList",
            "numberedList",
            "todoList",
            "outdent",
            "indent",
        ],
        shouldNotGroupWhenFull: false,
    },
    plugins: [
        Alignment,
        AutoImage,
        AutoLink,
        Autosave,
        BalloonToolbar,
        Bold,
        Bookmark,
        CKBox,
        CKBoxImageEdit,
        CloudServices,
        Code,
        // DocumentOutline,
        Essentials,
        // ExportPdf,
        // ExportWord,
        FontBackgroundColor,
        FontColor,
        FontFamily,
        FontSize,
        Heading,
        HorizontalLine,
        ImageBlock,
        ImageCaption,
        ImageEditing,
        ImageInline,
        ImageInsert,
        ImageInsertViaUrl,
        ImageResize,
        ImageStyle,
        ImageTextAlternative,
        ImageToolbar,
        ImageUpload,
        ImageUtils,
        MediaEmbed,
        ImportWord,
        Indent,
        IndentBlock,
        Italic,
        Link,
        LinkImage,
        List,
        ListProperties,
        PageBreak,
        Paragraph,
        PasteFromOffice,
        PictureEditing,
        RemoveFormat,
        Strikethrough,
        Subscript,
        Superscript,
        Table,
        TableCaption,
        TableCellProperties,
        TableColumnResize,
        TableProperties,
        TableToolbar,
        TodoList,
        Underline,
    ],
    extraPlugins: [
        // DocumentOutlineToggler,
        // MyUploadAdapterPlugin,
        InsertVideoPlugin,
    ],
    balloonToolbar: [
        "bold",
        "italic",
        "|",
        "link",
        "insertImage",
        "|",
        "bulletedList",
        "numberedList",
    ],
    cloudServices: {
        tokenUrl: CLOUD_SERVICES_TOKEN_URL,
    },
    mediaEmbed: {
        previewsInData: true, // Enables embedded media preview
    },
    // documentOutline: {
    //     container: document.querySelector("#editor-outline"),
    // },
    // exportPdf: {
    //     stylesheets: [
    //         /* This path should point to application stylesheets. */
    //         /* See: https://ckeditor.com/docs/ckeditor5/latest/features/converters/export-pdf.html */
    //         "./style.css",
    //         /* Export PDF needs access to stylesheets that style the content. */
    //         "https://cdn.ckeditor.com/ckeditor5/44.2.1/ckeditor5.css",
    //         "https://cdn.ckeditor.com/ckeditor5-premium-features/44.2.1/ckeditor5-premium-features.css",
    //     ],
    //     fileName: "export-pdf-demo.pdf",
    //     converterOptions: {
    //         format: "A4",
    //         margin_top: "20mm",
    //         margin_bottom: "20mm",
    //         margin_right: "12mm",
    //         margin_left: "12mm",
    //         page_orientation: "portrait",
    //     },
    // },
    // exportWord: {
    //     stylesheets: [
    //         /* This path should point to application stylesheets. */
    //         /* See: https://ckeditor.com/docs/ckeditor5/latest/features/converters/export-word.html */
    //         "./style.css",
    //         /* Export Word needs access to stylesheets that style the content. */
    //         "https://cdn.ckeditor.com/ckeditor5/44.2.1/ckeditor5.css",
    //         "https://cdn.ckeditor.com/ckeditor5-premium-features/44.2.1/ckeditor5-premium-features.css",
    //     ],
    //     fileName: "export-word-demo.docx",
    //     converterOptions: {
    //         document: {
    //             orientation: "portrait",
    //             size: "A4",
    //             margins: {
    //                 top: "20mm",
    //                 bottom: "20mm",
    //                 right: "12mm",
    //                 left: "12mm",
    //             },
    //         },
    //     },
    // },
    fontFamily: {
        supportAllValues: true,
    },
    fontSize: {
        options: [10, 12, 14, "default", 18, 20, 22, 24, 26, 28, 30],
        supportAllValues: true,
    },
    heading: {
        options: [
            {
                model: "paragraph",
                title: "Paragraph",
                class: "ck-heading_paragraph",
            },
            {
                model: "heading1",
                view: "h1",
                title: "Heading 1",
                class: "ck-heading_heading1",
            },
            {
                model: "heading2",
                view: "h2",
                title: "Heading 2",
                class: "ck-heading_heading2",
            },
            {
                model: "heading3",
                view: "h3",
                title: "Heading 3",
                class: "ck-heading_heading3",
            },
            {
                model: "heading4",
                view: "h4",
                title: "Heading 4",
                class: "ck-heading_heading4",
            },
            {
                model: "heading5",
                view: "h5",
                title: "Heading 5",
                class: "ck-heading_heading5",
            },
            {
                model: "heading6",
                view: "h6",
                title: "Heading 6",
                class: "ck-heading_heading6",
            },
        ],
    },
    image: {
        toolbar: [
            "toggleImageCaption",
            "imageTextAlternative",
            "|",
            "imageStyle:inline",
            "imageStyle:wrapText",
            "imageStyle:breakText",
            "imageStyle:full",
            "imageStyle:side",
            "|",
            "resizeImage",
            "|",
            "ckboxImageEdit",
        ],
    },
    licenseKey: LICENSE_KEY,
    link: {
        addTargetToExternalLinks: true,
        defaultProtocol: "https://",
        decorators: {
            toggleDownloadable: {
                mode: "manual",
                label: "Downloadable",
                attributes: {
                    download: "file",
                },
            },
        },
    },
    list: {
        properties: {
            styles: true,
            startIndex: true,
            reversed: true,
        },
    },
    menuBar: {
        isVisible: true,
    },
    placeholder: "Type or paste your content here!",
    table: {
        contentToolbar: [
            "tableColumn",
            "tableRow",
            "mergeTableCells",
            "tableProperties",
            "tableCellProperties",
        ],
    },
};

configUpdateAlert(editorConfig);

document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".ckeditor").forEach((editorElement) => {
        ClassicEditor.create(editorElement, editorConfig).then((editor) => {
            console.log(Array.from(editor.ui.componentFactory.names));
            window.editor = editor;
        });
    });
});

/**
 * This function exists to remind you to update the config needed for premium features.
 * The function can be safely removed. Make sure to also remove call to this function when doing so.
 */
function configUpdateAlert(config) {
    if (configUpdateAlert.configUpdateAlertShown) {
        return;
    }

    const isModifiedByUser = (currentValue, forbiddenValue) => {
        if (currentValue === forbiddenValue) {
            return false;
        }

        if (currentValue === undefined) {
            return false;
        }

        return true;
    };

    const valuesToUpdate = [];

    configUpdateAlert.configUpdateAlertShown = true;

    if (!isModifiedByUser(config.licenseKey, "<YOUR_LICENSE_KEY>")) {
        valuesToUpdate.push("LICENSE_KEY");
    }

    if (
        !isModifiedByUser(
            config.cloudServices?.tokenUrl,
            "<YOUR_CLOUD_SERVICES_TOKEN_URL>"
        )
    ) {
        valuesToUpdate.push("CLOUD_SERVICES_TOKEN_URL");
    }

    if (valuesToUpdate.length) {
        window.alert(
            [
                "Please update the following values in your editor config",
                "to receive full access to Premium Features:",
                "",
                ...valuesToUpdate.map((value) => ` - ${value}`),
            ].join("\n")
        );
    }
}
