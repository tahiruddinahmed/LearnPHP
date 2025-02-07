## Task: Implement a Content Rendering Interface for Your CMS Project
Objective:
Design a system where every content type (for example, Articles and Pages) in your CMS can be rendered into HTML. This will be achieved by creating an interface that enforces a common method for rendering, and then implementing that interface in different content classes.

### Intructions 
1. Define the Interface:
    - Create a new file (e.g., `ContentInterface.php`).
    - In this file, define an interface (e.g., `ContentInterface`) that declares a method named `render()`.
    - Ensure that the `render()` method is meant to return a string representing the HTML output of the content.

2. Create the Article Class:
    - Create a separate file for the `Article` class (e.g., `Article.php`).
    - Have the `Article` class implement the interface you defined.
    - Determine and add properties relevant to an article, such as a `title`, `body text`, and `author`.
    - Provide a constructor (or appropriate initialization mechanism) to set these properties.
    - Implement the `render()` method so that it returns the article content formatted as HTML (for instance, using appropriate HTML tags for titles, paragraphs, etc.).

3. Create the Page Class:
    - Similarly, create another file for the `Page` class (e.g., `Page.php`).
    - Have the `Page` class implement the same interface.
    - Decide on properties that a page should have (for example, a title and main content).
    - Initialize these properties through a constructor or similar method.
    - Implement the `render()` method to return the page content as HTML, using suitable HTML structure and tags.

4. Test Your Implementation:
    - Create a test file (e.g., `index.php`).
    - Within this file, instantiate an object of the `Article` class and an object of the `Page` class.
    - Call the `render()` method on both objects and output the returned HTML.
    - This will demonstrate how your CMS can handle different content types using a common interface.

5. Reflection:
    - Consider how this approach (using an interface) allows for easy extensibility.
    - Think about how you might add new content types (for example, a BlogPost) in the future by simply implementing the same interface.

Remember:
    - Do not provide any concrete implementation details beyond what’s required by the interface.
    - The focus is on enforcing a consistent method (`render()`) across various content types in your CMS.
    - Your solution should illustrate the benefits of using an interface (such as consistent behavior, flexibility, and the ability to easily add new content types).