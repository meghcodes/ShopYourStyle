import org.testng.annotations.*;
import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.chrome.ChromeDriver;

public class ShopYourStyle_ {

    WebDriver driver;

    @BeforeTest
    public void launchBrowser(){
        System.setProperty("webdriver.chrome.driver",
                "/Users/Downloads/chromedriver-mac-arm64_2/chromedriver");
        driver = new ChromeDriver();
        driver.get("http://localhost/Shopyourstyle/Home.html");
    }


    @Test(priority = 1)
    public void onClick(){
        WebElement buttonElement = driver.findElement(By.id("contact"));
        buttonElement.click();
    }

    @Test(priority = 2)
    public void submitForm(){
        WebElement nameInput = driver.findElement(By.name("name"));
        WebElement emailInput = driver.findElement(By.name("email"));
        WebElement element = driver.findElement(By.id("message"));

        nameInput.sendKeys("John Doe");
        emailInput.sendKeys("john@example.com");
        element.sendKeys("This is a sample test case");
//        WebElement submitButton = driver.findElement(By.id("submit-button"));
//        submitButton.click();
    }

    @Test(priority = 3)
    public void onClick1(){
        WebElement buttonElement = driver.findElement(By.id("about"));
        buttonElement.click();
    }

    @Test(priority = 4)
    public void onClick2(){
        WebElement buttonElement = driver.findElement(By.id("login"));
        buttonElement.click();
    }

    @Test(priority = 5)
    public void onClick3() {
        WebElement buttonElement = driver.findElement(By.id("signup-btn"));
        buttonElement.click();

        WebElement username = driver.findElement(By.id("username"));
        username.isDisplayed();
        username.isEnabled();
        username.sendKeys("Jack");

        WebElement email = driver.findElement(By.id("email"));
        email.isDisplayed();
        email.isEnabled();
        email.sendKeys("jack23@gmail.com");

        WebElement password = driver.findElement(By.id("password"));
        password.isDisplayed();
        password.isEnabled();
        password.sendKeys("Jack@123");

        WebElement buttonElement2 = driver.findElement(By.id("signup"));
        buttonElement2.click();
    }

    @Test(priority = 6)
    public void onClick4(){
        WebElement username = driver.findElement(By.id("username"));
        username.isDisplayed();
        username.isEnabled();
        username.sendKeys("Jack");

        WebElement password = driver.findElement(By.id("password"));
        password.isDisplayed();
        password.isEnabled();
        password.sendKeys("Jack@123");

        WebElement buttonElement = driver.findElement(By.id("login-btn"));
        buttonElement.click();
    }

    @Test(priority = 7)
    public void onClick5(){
        WebElement buttonElement = driver.findElement(By.id("change-password"));
        buttonElement.click();
    }

    @Test(priority = 8)
    public void onClick6(){
        WebElement buttonElement = driver.findElement(By.id("back"));
        buttonElement.click();
    }

    @Test(priority = 9)
    public void onClick7(){
        WebElement buttonElement = driver.findElement(By.id("home"));
        buttonElement.click();
    }

    @Test(priority = 10)
    public void onClick8(){
        WebElement buttonElement = driver.findElement(By.id("men"));
        buttonElement.click();
    }

    @Test(priority = 11)
    public void onClick9(){
        WebElement buttonElement = driver.findElement(By.id("women"));
        buttonElement.click();
    }

    @Test(priority = 12)
    public void onClick10(){
        WebElement buttonElement = driver.findElement(By.id("kids"));
        buttonElement.click();
    }

    @Test(priority = 13)
    public void onClick11(){
        WebElement buttonElement = driver.findElement(By.id("navigateButton"));
        buttonElement.click();
    }

    @Test(priority = 14)
    public void onClick12(){
        WebElement buttonElement = driver.findElement(By.id("navigateButton"));
        buttonElement.click();
    }

    @Test(priority = 15)
    public void onClick13(){
        WebElement buttonElement = driver.findElement(By.id("navigateButton"));
        buttonElement.click();
    }

    @Test(priority = 16)
    public void OrderSuccessful(){
        WebElement buttonElement = driver.findElement(By.id("continue"));
        buttonElement.click();
    }
}
