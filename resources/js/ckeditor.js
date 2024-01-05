import { ClassicEditor as ClassicEditorBase } from '@ckeditor/ckeditor5-editor-classic';

import { Alignment } from "@ckeditor/ckeditor5-alignment"; // Importing the package.
import { Autoformat } from "@ckeditor/ckeditor5-autoformat";
import { Bold, Italic } from "@ckeditor/ckeditor5-basic-styles";
import { BlockQuote } from "@ckeditor/ckeditor5-block-quote";
import { CloudServices } from "@ckeditor/ckeditor5-cloud-services";
import { Essentials } from "@ckeditor/ckeditor5-essentials";
import { Heading } from "@ckeditor/ckeditor5-heading";
import {
    Image,
    ImageCaption,
    ImageStyle,
    ImageToolbar,
    ImageUpload,
} from "@ckeditor/ckeditor5-image";
import { Indent } from "@ckeditor/ckeditor5-indent";
import { Link } from "@ckeditor/ckeditor5-link";
import { List } from "@ckeditor/ckeditor5-list";
import { MediaEmbed } from "@ckeditor/ckeditor5-media-embed";
import { Paragraph } from "@ckeditor/ckeditor5-paragraph";
import { PasteFromOffice } from "@ckeditor/ckeditor5-paste-from-office";
import { Table, TableToolbar } from "@ckeditor/ckeditor5-table";
import { TextTransformation } from "@ckeditor/ckeditor5-typing";

// ClassicEditor.create(document.querySelector("#editortext"), {
//     // The plugins are now passed directly to .create().
//     plugins: [
//         Alignment,
//         Autoformat,
//         BlockQuote,
//         Bold,
//         CloudServices,
//         Essentials,
//         Heading,
//         Image,
//         ImageCaption,
//         ImageStyle,
//         ImageToolbar,
//         ImageUpload,
//         Indent,
//         Italic,
//         Link,
//         List,
//         MediaEmbed,
//         Paragraph,
//         PasteFromOffice,
//         Table,
//         TableToolbar,
//         TextTransformation,
//     ],

//     // So is the rest of the default configuration.
//     toolbar: {
//         items: [
//             "alignment", // Displaying the proper UI element in the toolbar.
//             "heading",
//             "|",
//             "bold",
//             "italic",
//             "link",
//             "bulletedList",
//             "numberedList",
//             "|",
//             "outdent",
//             "indent",
//             "|",
//             "imageUpload",
//             "blockQuote",
//             "insertTable",
//             "mediaEmbed",
//             "undo",
//             "redo",
//         ],
//     },
//     language: "en",
//     image: {
//         toolbar: [
//             "imageTextAlternative",
//             "toggleImageCaption",
//             "imageStyle:inline",
//             "imageStyle:block",
//             "imageStyle:side",
//         ],
//     },
//     table: {
//         contentToolbar: ["tableColumn", "tableRow", "mergeTableCells"],
//     },
// })
//     .then((editor) => {
//         editor.ui.view.editable.element.style.height = '500px';
//         console.log(editor);
//     })
//     .catch((error) => {
//         console.error(error);
//     });

// ckeditor.js

export default class ClassicEditor extends ClassicEditorBase {}

ClassicEditor.builtinPlugins = [
    Alignment,
    Autoformat,
    BlockQuote,
    Bold,
    CloudServices,
    Essentials,
    Heading,
    Image,
    ImageCaption,
    ImageStyle,
    ImageToolbar,
    ImageUpload,
    Indent,
    Italic,
    Link,
    List,
    MediaEmbed,
    Paragraph,
    PasteFromOffice,
    Table,
    TableToolbar,
    TextTransformation,
];

ClassicEditor.defaultConfig = {
    toolbar: {
        items: [
            "alignment", // Displaying the proper UI element in the toolbar.
            "heading",
            "|",
            "bold",
            "italic",
            "link",
            "bulletedList",
            "numberedList",
            "|",
            "outdent",
            "indent",
            "|",
            "imageUpload",
            "blockQuote",
            "insertTable",
            "mediaEmbed",
            "undo",
            "redo",
        ],
    },
    language: "en",
    image: {
        toolbar: [
            "imageTextAlternative",
            "toggleImageCaption",
            "imageStyle:inline",
            "imageStyle:block",
            "imageStyle:side",
        ],
    },
    table: {
        contentToolbar: ["tableColumn", "tableRow", "mergeTableCells"],
    },
};
