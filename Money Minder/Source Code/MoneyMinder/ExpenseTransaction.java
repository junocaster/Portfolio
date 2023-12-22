package MoneyMinder;

public class ExpenseTransaction extends Transaction{
    private String description;

    public ExpenseTransaction(String date, String category, double amount, String description) {
        super(date, category, amount);
        this.description = description;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }    
}
