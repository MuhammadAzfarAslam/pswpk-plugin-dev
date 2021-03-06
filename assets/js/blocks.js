(function(blocks, element, editor, components){
    var el = element.createElement;
    var RichTextEditor = editor.RichText;
    var AlignmentToolbar = editor.AlignmentToolbar;
    var BlockControls = editor.BlockControls;
    var InspectorControls = editor.InspectorControls;
    var PanelBody = components.PanelBody;
    blocks.registerBlockType('pwspk-plugin-dev/pwspk-block01', {
        title: 'PWSPK Block',
        description: 'This is a test block',
        icon: 'admin-home',
        category: 'layout',
        attributes: {
            conent:{
                type: 'array',
                source: 'children',
                selector: 'div'
            }
        },
        edit: function(prop){
            var content = prop.attributes.content;
            var alignment = prop.attributes.alignment;
            function editText(newText){
                prop.setAttributes({content: newText});
            }
            function changeAlignment(newAlignment){
                prop.setAttributes({alignment: newAlignment === undefined ? 'none' : newAlignment});
            }
            return[
                el(BlockControls, {
                    key: 'controls',
                }, el(AlignmentToolbar, {
                    value: AlignmentToolbar,
                    onChange: changeAlignment,
                })
                ),
                el(InspectorControls, {
                    key: 'controls',
                },el(PanelBody, {
                    title: 'Alignment Control',
                },                
                el(AlignmentToolbar, {
                    value: AlignmentToolbar,
                    onChange: changeAlignment,
                }),
                ),
                ),
                el(RichTextEditor,{
                    tagName: 'div',
                    onChange: editText,
                    style: {textAlign: alignment},
                    className: prop.className,
                    value: content
                })
            ];                
        },
        save: function(prop){
            return el(RichTextEditor.Content, {
                tagName: 'div',
                style: {textAlign: prop.attributes.alignment},
                value: prop.attributes.content,
            });
        }
    });
}(window.wp.blocks, window.wp.element, window.wp.editor, window.wp.components));