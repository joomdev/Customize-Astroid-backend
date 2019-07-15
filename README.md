# Customize-Astroid-backend

You can create a Joomla plugin type _system_ with function _onBeforeAstroidAdminRender_ and that should give you control over the Astroid backend.

The following events are possible.

```AstroidFramework::addStyleSheet(); // to add css link
AstroidFramework::addStyleDeclaration(); // to add css script
AstroidFramework::addScript(); // to add js file in head
AstroidFramework::addScript($js, "body"); // to add js file in body
AstroidFramework::addScriptDeclaration(); // to add js script in head
AstroidFramework::addScriptDeclaration($js, "body"); // to add js script in body```
