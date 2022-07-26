<?php

$dir = realpath( __DIR__ . '/..' );

return array (
  'ACA\\ACF\\AdvancedCustomFields' => $dir . '/classes/AdvancedCustomFields.php',
  'ACA\\ACF\\Asset\\Script\\Admin' => $dir . '/classes/Asset/Script/Admin.php',
  'ACA\\ACF\\CloneColumnFactory' => $dir . '/classes/CloneColumnFactory.php',
  'ACA\\ACF\\Column' => $dir . '/classes/Column.php',
  'ACA\\ACF\\ColumnFactory' => $dir . '/classes/ColumnFactory.php',
  'ACA\\ACF\\ColumnGroup' => $dir . '/classes/ColumnGroup.php',
  'ACA\\ACF\\ColumnInstantiator' => $dir . '/classes/ColumnInstantiator.php',
  'ACA\\ACF\\Column\\Deprecated' => $dir . '/classes/Column/Deprecated.php',
  'ACA\\ACF\\Column\\Repeater' => $dir . '/classes/Column/Repeater.php',
  'ACA\\ACF\\ConfigFactory' => $dir . '/classes/ConfigFactory.php',
  'ACA\\ACF\\Configurable' => $dir . '/classes/Configurable.php',
  'ACA\\ACF\\Configurable\\ClonePrefixedField' => $dir . '/classes/Configurable/ClonePrefixedField.php',
  'ACA\\ACF\\Configurable\\Column' => $dir . '/classes/Configurable/Column.php',
  'ACA\\ACF\\Configurable\\Group' => $dir . '/classes/Configurable/Group.php',
  'ACA\\ACF\\Dependencies' => $dir . '/classes/Dependencies.php',
  'ACA\\ACF\\Editing\\EditableTrait' => $dir . '/classes/Editing/EditableTrait.php',
  'ACA\\ACF\\Editing\\EditingFactoryAware' => $dir . '/classes/Editing/EditingFactoryAware.php',
  'ACA\\ACF\\Editing\\EditingModelFactory' => $dir . '/classes/Editing/EditingModelFactory.php',
  'ACA\\ACF\\Editing\\ModelFactory' => $dir . '/classes/Editing/ModelFactory.php',
  'ACA\\ACF\\Editing\\ModelViewFactory' => $dir . '/classes/Editing/ModelViewFactory.php',
  'ACA\\ACF\\Editing\\Service\\Taxonomies' => $dir . '/classes/Editing/Service/Taxonomies.php',
  'ACA\\ACF\\Editing\\Service\\Taxonomy' => $dir . '/classes/Editing/Service/Taxonomy.php',
  'ACA\\ACF\\Editing\\StorageFactory' => $dir . '/classes/Editing/StorageFactory.php',
  'ACA\\ACF\\Editing\\Storage\\CloneField' => $dir . '/classes/Editing/Storage/CloneField.php',
  'ACA\\ACF\\Editing\\Storage\\Field' => $dir . '/classes/Editing/Storage/Field.php',
  'ACA\\ACF\\Editing\\Storage\\Group' => $dir . '/classes/Editing/Storage/Group.php',
  'ACA\\ACF\\Editing\\Storage\\ReadStorage' => $dir . '/classes/Editing/Storage/ReadStorage.php',
  'ACA\\ACF\\Editing\\Storage\\Read\\Column' => $dir . '/classes/Editing/Storage/Read/Column.php',
  'ACA\\ACF\\Editing\\View\\Link' => $dir . '/classes/Editing/View/Link.php',
  'ACA\\ACF\\Editing\\View\\Range' => $dir . '/classes/Editing/View/Range.php',
  'ACA\\ACF\\Export\\ModelFactory' => $dir . '/classes/Export/ModelFactory.php',
  'ACA\\ACF\\Export\\Model\\Date' => $dir . '/classes/Export/Model/Date.php',
  'ACA\\ACF\\Export\\Model\\Link' => $dir . '/classes/Export/Model/Link.php',
  'ACA\\ACF\\Field' => $dir . '/classes/Field.php',
  'ACA\\ACF\\FieldFactory' => $dir . '/classes/FieldFactory.php',
  'ACA\\ACF\\FieldGroup\\Location\\Comment' => $dir . '/classes/FieldGroup/Location/Comment.php',
  'ACA\\ACF\\FieldGroup\\Location\\Media' => $dir . '/classes/FieldGroup/Location/Media.php',
  'ACA\\ACF\\FieldGroup\\Location\\Post' => $dir . '/classes/FieldGroup/Location/Post.php',
  'ACA\\ACF\\FieldGroup\\Location\\Taxonomy' => $dir . '/classes/FieldGroup/Location/Taxonomy.php',
  'ACA\\ACF\\FieldGroup\\Location\\User' => $dir . '/classes/FieldGroup/Location/User.php',
  'ACA\\ACF\\FieldGroup\\Query' => $dir . '/classes/FieldGroup/Query.php',
  'ACA\\ACF\\FieldGroup\\QueryFactory' => $dir . '/classes/FieldGroup/QueryFactory.php',
  'ACA\\ACF\\FieldRepository' => $dir . '/classes/FieldRepository.php',
  'ACA\\ACF\\FieldType' => $dir . '/classes/FieldType.php',
  'ACA\\ACF\\Field\\Choices' => $dir . '/classes/Field/Choices.php',
  'ACA\\ACF\\Field\\Date' => $dir . '/classes/Field/Date.php',
  'ACA\\ACF\\Field\\DefaultValue' => $dir . '/classes/Field/DefaultValue.php',
  'ACA\\ACF\\Field\\DisplayFormat' => $dir . '/classes/Field/DisplayFormat.php',
  'ACA\\ACF\\Field\\MaxLength' => $dir . '/classes/Field/MaxLength.php',
  'ACA\\ACF\\Field\\Multiple' => $dir . '/classes/Field/Multiple.php',
  'ACA\\ACF\\Field\\Number' => $dir . '/classes/Field/Number.php',
  'ACA\\ACF\\Field\\Placeholder' => $dir . '/classes/Field/Placeholder.php',
  'ACA\\ACF\\Field\\PostTypeFilterable' => $dir . '/classes/Field/PostTypeFilterable.php',
  'ACA\\ACF\\Field\\RoleFilterable' => $dir . '/classes/Field/RoleFilterable.php',
  'ACA\\ACF\\Field\\SaveFormat' => $dir . '/classes/Field/SaveFormat.php',
  'ACA\\ACF\\Field\\Subfields' => $dir . '/classes/Field/Subfields.php',
  'ACA\\ACF\\Field\\TaxonomyFilterable' => $dir . '/classes/Field/TaxonomyFilterable.php',
  'ACA\\ACF\\Field\\TermRelation' => $dir . '/classes/Field/TermRelation.php',
  'ACA\\ACF\\Field\\Textarea' => $dir . '/classes/Field/Textarea.php',
  'ACA\\ACF\\Field\\Type\\Boolean' => $dir . '/classes/Field/Type/Boolean.php',
  'ACA\\ACF\\Field\\Type\\ButtonGroup' => $dir . '/classes/Field/Type/ButtonGroup.php',
  'ACA\\ACF\\Field\\Type\\Checkbox' => $dir . '/classes/Field/Type/Checkbox.php',
  'ACA\\ACF\\Field\\Type\\ChoicesTrait' => $dir . '/classes/Field/Type/ChoicesTrait.php',
  'ACA\\ACF\\Field\\Type\\CloneField' => $dir . '/classes/Field/Type/CloneField.php',
  'ACA\\ACF\\Field\\Type\\Color' => $dir . '/classes/Field/Type/Color.php',
  'ACA\\ACF\\Field\\Type\\Date' => $dir . '/classes/Field/Type/Date.php',
  'ACA\\ACF\\Field\\Type\\DateTime' => $dir . '/classes/Field/Type/DateTime.php',
  'ACA\\ACF\\Field\\Type\\DefaultValueTrait' => $dir . '/classes/Field/Type/DefaultValueTrait.php',
  'ACA\\ACF\\Field\\Type\\Email' => $dir . '/classes/Field/Type/Email.php',
  'ACA\\ACF\\Field\\Type\\File' => $dir . '/classes/Field/Type/File.php',
  'ACA\\ACF\\Field\\Type\\FlexibleContent' => $dir . '/classes/Field/Type/FlexibleContent.php',
  'ACA\\ACF\\Field\\Type\\Gallery' => $dir . '/classes/Field/Type/Gallery.php',
  'ACA\\ACF\\Field\\Type\\GoogleMap' => $dir . '/classes/Field/Type/GoogleMap.php',
  'ACA\\ACF\\Field\\Type\\Image' => $dir . '/classes/Field/Type/Image.php',
  'ACA\\ACF\\Field\\Type\\Link' => $dir . '/classes/Field/Type/Link.php',
  'ACA\\ACF\\Field\\Type\\MaxLengthTrait' => $dir . '/classes/Field/Type/MaxLengthTrait.php',
  'ACA\\ACF\\Field\\Type\\MultipleTrait' => $dir . '/classes/Field/Type/MultipleTrait.php',
  'ACA\\ACF\\Field\\Type\\Number' => $dir . '/classes/Field/Type/Number.php',
  'ACA\\ACF\\Field\\Type\\NumberTrait' => $dir . '/classes/Field/Type/NumberTrait.php',
  'ACA\\ACF\\Field\\Type\\Oembed' => $dir . '/classes/Field/Type/Oembed.php',
  'ACA\\ACF\\Field\\Type\\PageLinks' => $dir . '/classes/Field/Type/PageLinks.php',
  'ACA\\ACF\\Field\\Type\\Password' => $dir . '/classes/Field/Type/Password.php',
  'ACA\\ACF\\Field\\Type\\PlaceholderTrait' => $dir . '/classes/Field/Type/PlaceholderTrait.php',
  'ACA\\ACF\\Field\\Type\\PostObject' => $dir . '/classes/Field/Type/PostObject.php',
  'ACA\\ACF\\Field\\Type\\PostTypeTrait' => $dir . '/classes/Field/Type/PostTypeTrait.php',
  'ACA\\ACF\\Field\\Type\\Radio' => $dir . '/classes/Field/Type/Radio.php',
  'ACA\\ACF\\Field\\Type\\Range' => $dir . '/classes/Field/Type/Range.php',
  'ACA\\ACF\\Field\\Type\\Relationship' => $dir . '/classes/Field/Type/Relationship.php',
  'ACA\\ACF\\Field\\Type\\Repeater' => $dir . '/classes/Field/Type/Repeater.php',
  'ACA\\ACF\\Field\\Type\\Select' => $dir . '/classes/Field/Type/Select.php',
  'ACA\\ACF\\Field\\Type\\Taxonomy' => $dir . '/classes/Field/Type/Taxonomy.php',
  'ACA\\ACF\\Field\\Type\\TaxonomyFilterableTrait' => $dir . '/classes/Field/Type/TaxonomyFilterableTrait.php',
  'ACA\\ACF\\Field\\Type\\Text' => $dir . '/classes/Field/Type/Text.php',
  'ACA\\ACF\\Field\\Type\\Textarea' => $dir . '/classes/Field/Type/Textarea.php',
  'ACA\\ACF\\Field\\Type\\Time' => $dir . '/classes/Field/Type/Time.php',
  'ACA\\ACF\\Field\\Type\\Url' => $dir . '/classes/Field/Type/Url.php',
  'ACA\\ACF\\Field\\Type\\User' => $dir . '/classes/Field/Type/User.php',
  'ACA\\ACF\\Field\\Type\\ValueDecoratorTrait' => $dir . '/classes/Field/Type/ValueDecoratorTrait.php',
  'ACA\\ACF\\Field\\Type\\Wysiwyg' => $dir . '/classes/Field/Type/Wysiwyg.php',
  'ACA\\ACF\\Field\\ValueWrapper' => $dir . '/classes/Field/ValueWrapper.php',
  'ACA\\ACF\\FieldsFactory' => $dir . '/classes/FieldsFactory.php',
  'ACA\\ACF\\Filtering\\FilteringFactoryAware' => $dir . '/classes/Filtering/FilteringFactoryAware.php',
  'ACA\\ACF\\Filtering\\FilteringModelFactory' => $dir . '/classes/Filtering/FilteringModelFactory.php',
  'ACA\\ACF\\Filtering\\FilteringTrait' => $dir . '/classes/Filtering/FilteringTrait.php',
  'ACA\\ACF\\Filtering\\ModelFactory' => $dir . '/classes/Filtering/ModelFactory.php',
  'ACA\\ACF\\Filtering\\Model\\Choices' => $dir . '/classes/Filtering/Model/Choices.php',
  'ACA\\ACF\\Filtering\\Model\\DatePicker' => $dir . '/classes/Filtering/Model/DatePicker.php',
  'ACA\\ACF\\Filtering\\Model\\DateTimePicker' => $dir . '/classes/Filtering/Model/DateTimePicker.php',
  'ACA\\ACF\\Filtering\\Model\\File' => $dir . '/classes/Filtering/Model/File.php',
  'ACA\\ACF\\Filtering\\Model\\FormattedRelation' => $dir . '/classes/Filtering/Model/FormattedRelation.php',
  'ACA\\ACF\\Filtering\\Model\\FormattedRelations' => $dir . '/classes/Filtering/Model/FormattedRelations.php',
  'ACA\\ACF\\Filtering\\Model\\Image' => $dir . '/classes/Filtering/Model/Image.php',
  'ACA\\ACF\\Filtering\\Model\\Link' => $dir . '/classes/Filtering/Model/Link.php',
  'ACA\\ACF\\Filtering\\Model\\Number' => $dir . '/classes/Filtering/Model/Number.php',
  'ACA\\ACF\\Filtering\\Model\\SerializedChoices' => $dir . '/classes/Filtering/Model/SerializedChoices.php',
  'ACA\\ACF\\Filtering\\Model\\Toggle' => $dir . '/classes/Filtering/Model/Toggle.php',
  'ACA\\ACF\\Filtering\\Model\\Unformatted' => $dir . '/classes/Filtering/Model/Unformatted.php',
  'ACA\\ACF\\GroupColumnFactory' => $dir . '/classes/GroupColumnFactory.php',
  'ACA\\ACF\\Helper' => $dir . '/classes/Helper.php',
  'ACA\\ACF\\Nonce\\UpdateDeprecatedNonce' => $dir . '/classes/Nonce/UpdateDeprecatedNonce.php',
  'ACA\\ACF\\Plugin\\SetupFactory' => $dir . '/classes/Plugin/SetupFactory.php',
  'ACA\\ACF\\Plugin\\Update\\V3000' => $dir . '/classes/Plugin/Update/V3000.php',
  'ACA\\ACF\\RequestHandler\\MapLegacyListScreen' => $dir . '/classes/RequestHandler/MapLegacyListScreen.php',
  'ACA\\ACF\\Search\\ComparisonFactory' => $dir . '/classes/Search/ComparisonFactory.php',
  'ACA\\ACF\\Search\\ComparisonFactory\\Repeater' => $dir . '/classes/Search/ComparisonFactory/Repeater.php',
  'ACA\\ACF\\Search\\Comparison\\DatePicker' => $dir . '/classes/Search/Comparison/DatePicker.php',
  'ACA\\ACF\\Search\\Comparison\\Link' => $dir . '/classes/Search/Comparison/Link.php',
  'ACA\\ACF\\Search\\Comparison\\MultiSelect' => $dir . '/classes/Search/Comparison/MultiSelect.php',
  'ACA\\ACF\\Search\\Comparison\\Repeater' => $dir . '/classes/Search/Comparison/Repeater.php',
  'ACA\\ACF\\Search\\Comparison\\Repeater\\Date' => $dir . '/classes/Search/Comparison/Repeater/Date.php',
  'ACA\\ACF\\Search\\Comparison\\Repeater\\DateTime' => $dir . '/classes/Search/Comparison/Repeater/DateTime.php',
  'ACA\\ACF\\Search\\Comparison\\Repeater\\Image' => $dir . '/classes/Search/Comparison/Repeater/Image.php',
  'ACA\\ACF\\Search\\Comparison\\Repeater\\Media' => $dir . '/classes/Search/Comparison/Repeater/Media.php',
  'ACA\\ACF\\Search\\Comparison\\Repeater\\Number' => $dir . '/classes/Search/Comparison/Repeater/Number.php',
  'ACA\\ACF\\Search\\Comparison\\Repeater\\Posts' => $dir . '/classes/Search/Comparison/Repeater/Posts.php',
  'ACA\\ACF\\Search\\Comparison\\Repeater\\Select' => $dir . '/classes/Search/Comparison/Repeater/Select.php',
  'ACA\\ACF\\Search\\Comparison\\Repeater\\Text' => $dir . '/classes/Search/Comparison/Repeater/Text.php',
  'ACA\\ACF\\Search\\Comparison\\Repeater\\Toggle' => $dir . '/classes/Search/Comparison/Repeater/Toggle.php',
  'ACA\\ACF\\Search\\Comparison\\Repeater\\User' => $dir . '/classes/Search/Comparison/Repeater/User.php',
  'ACA\\ACF\\Search\\Comparison\\Select' => $dir . '/classes/Search/Comparison/Select.php',
  'ACA\\ACF\\Search\\Comparison\\Taxonomies' => $dir . '/classes/Search/Comparison/Taxonomies.php',
  'ACA\\ACF\\Search\\Comparison\\Taxonomy' => $dir . '/classes/Search/Comparison/Taxonomy.php',
  'ACA\\ACF\\Search\\Comparison\\User' => $dir . '/classes/Search/Comparison/User.php',
  'ACA\\ACF\\Search\\Comparison\\Users' => $dir . '/classes/Search/Comparison/Users.php',
  'ACA\\ACF\\Search\\SearchComparisonFactory' => $dir . '/classes/Search/SearchComparisonFactory.php',
  'ACA\\ACF\\Search\\SearchFactoryAware' => $dir . '/classes/Search/SearchFactoryAware.php',
  'ACA\\ACF\\Search\\SearchableTrait' => $dir . '/classes/Search/SearchableTrait.php',
  'ACA\\ACF\\Service\\AddColumns' => $dir . '/classes/Service/AddColumns.php',
  'ACA\\ACF\\Service\\ColumnSettings' => $dir . '/classes/Service/ColumnSettings.php',
  'ACA\\ACF\\Service\\InitColumn' => $dir . '/classes/Service/InitColumn.php',
  'ACA\\ACF\\Service\\LegacyColumnMapper' => $dir . '/classes/Service/LegacyColumnMapper.php',
  'ACA\\ACF\\Service\\RemoveDeprecatedColumnFromTypeSelector' => $dir . '/classes/Service/RemoveDeprecatedColumnFromTypeSelector.php',
  'ACA\\ACF\\Service\\Scripts' => $dir . '/classes/Service/Scripts.php',
  'ACA\\ACF\\Settings\\Column\\Color' => $dir . '/classes/Settings/Column/Color.php',
  'ACA\\ACF\\Settings\\Column\\Date' => $dir . '/classes/Settings/Column/Date.php',
  'ACA\\ACF\\Settings\\Column\\FlexibleContent' => $dir . '/classes/Settings/Column/FlexibleContent.php',
  'ACA\\ACF\\Settings\\Column\\HiddenDeprecated' => $dir . '/classes/Settings/Column/HiddenDeprecated.php',
  'ACA\\ACF\\Settings\\Column\\Oembed' => $dir . '/classes/Settings/Column/Oembed.php',
  'ACA\\ACF\\Settings\\Column\\PageLink' => $dir . '/classes/Settings/Column/PageLink.php',
  'ACA\\ACF\\Settings\\Column\\RepeaterDisplay' => $dir . '/classes/Settings/Column/RepeaterDisplay.php',
  'ACA\\ACF\\Settings\\Column\\RepeaterSubField' => $dir . '/classes/Settings/Column/RepeaterSubField.php',
  'ACA\\ACF\\Settings\\Column\\TermLink' => $dir . '/classes/Settings/Column/TermLink.php',
  'ACA\\ACF\\Settings\\Column\\Time' => $dir . '/classes/Settings/Column/Time.php',
  'ACA\\ACF\\Settings\\SettingFactory' => $dir . '/classes/Settings/SettingFactory.php',
  'ACA\\ACF\\Sorting\\FormatValue\\File' => $dir . '/classes/Sorting/FormatValue/File.php',
  'ACA\\ACF\\Sorting\\FormatValue\\Select' => $dir . '/classes/Sorting/FormatValue/Select.php',
  'ACA\\ACF\\Sorting\\FormatValue\\Taxonomy' => $dir . '/classes/Sorting/FormatValue/Taxonomy.php',
  'ACA\\ACF\\Sorting\\ModelFactory' => $dir . '/classes/Sorting/ModelFactory.php',
  'ACA\\ACF\\Sorting\\ModelFactory\\Relation' => $dir . '/classes/Sorting/ModelFactory/Relation.php',
  'ACA\\ACF\\Sorting\\ModelFactory\\Taxonomy' => $dir . '/classes/Sorting/ModelFactory/Taxonomy.php',
  'ACA\\ACF\\Sorting\\ModelFactory\\User' => $dir . '/classes/Sorting/ModelFactory/User.php',
  'ACA\\ACF\\Sorting\\SortableTrait' => $dir . '/classes/Sorting/SortableTrait.php',
  'ACA\\ACF\\Sorting\\SortingFactoryAware' => $dir . '/classes/Sorting/SortingFactoryAware.php',
  'ACA\\ACF\\Sorting\\SortingModelFactory' => $dir . '/classes/Sorting/SortingModelFactory.php',
  'ACA\\ACF\\Utils\\V2ToV3Migration' => $dir . '/classes/Utils/V2ToV3Migration.php',
  'ACA\\ACF\\Value\\Formatter' => $dir . '/classes/Value/Formatter.php',
  'ACA\\ACF\\Value\\FormatterFactory' => $dir . '/classes/Value/FormatterFactory.php',
  'ACA\\ACF\\Value\\Formatter\\Boolean' => $dir . '/classes/Value/Formatter/Boolean.php',
  'ACA\\ACF\\Value\\Formatter\\Color' => $dir . '/classes/Value/Formatter/Color.php',
  'ACA\\ACF\\Value\\Formatter\\DefaultFormatter' => $dir . '/classes/Value/Formatter/DefaultFormatter.php',
  'ACA\\ACF\\Value\\Formatter\\File' => $dir . '/classes/Value/Formatter/File.php',
  'ACA\\ACF\\Value\\Formatter\\FlexCount' => $dir . '/classes/Value/Formatter/FlexCount.php',
  'ACA\\ACF\\Value\\Formatter\\FlexStructure' => $dir . '/classes/Value/Formatter/FlexStructure.php',
  'ACA\\ACF\\Value\\Formatter\\Link' => $dir . '/classes/Value/Formatter/Link.php',
  'ACA\\ACF\\Value\\Formatter\\Maps' => $dir . '/classes/Value/Formatter/Maps.php',
  'ACA\\ACF\\Value\\Formatter\\MultipleFormatted' => $dir . '/classes/Value/Formatter/MultipleFormatted.php',
  'ACA\\ACF\\Value\\Formatter\\Select' => $dir . '/classes/Value/Formatter/Select.php',
);