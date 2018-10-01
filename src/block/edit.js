const { __ } = wp.i18n; // Import __() from wp.i18n
const { registerBlockType } = wp.blocks; // Import registerBlockType() from wp.blocks
const { ExternalLink } = wp.components;
const { RichText } = wp.editor;
const {
  withSelect,
  withDispatch
} = wp.data;
const { compose } = wp.compose;

function editExcerpt( props ) {

  const { excerpt, onUpdateExcerpt } = props;

  return (
    <div className = { props.className }>
      <RichText
        tagName = "p"
        onChange = { ( value ) => onUpdateExcerpt( value ) }
        placeholder = {
          /* translators: placeholder text. The Excerpt block in wp-admin backend. */
          __( 'Write a catchy post summary.', 'gonzo-the-excerpt' )
        }
        value = { excerpt }
        format = 'string'
      />
      <ExternalLink href="https://codex.wordpress.org/Excerpt">
        { __( 'Learn more about manual excerpts', 'gonzo-the-excerpt' ) }
      </ExternalLink>
    </div>
  );
}

export default compose( [
  withSelect( ( select ) => {
    return {
      excerpt: select( 'core/editor' ).getEditedPostAttribute( 'excerpt' ),
    };
  } ),
  withDispatch( ( dispatch ) => ( {
    onUpdateExcerpt( excerpt ) {
      dispatch( 'core/editor' ).editPost( { excerpt } );
    },
  } ) ),
] )( editExcerpt );
