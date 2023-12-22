package MoneyMinder;

public class Account {
    private String name;
    private String category;
    private double balance;

    public Account(String name, String category, double balance) {
        this.name = name;
        this.category = category;
        this.balance = balance;
    }

    public String getName() {
        return name;
    }

    public String getCategory() {
        return category;
    }

    public double getBalance() {
        return balance;
    }
}
