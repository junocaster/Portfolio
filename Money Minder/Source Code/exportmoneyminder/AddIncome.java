package exportmoneyminder;

import java.text.SimpleDateFormat;
import java.io.BufferedWriter;
import java.io.FileWriter;
import java.io.IOException;
import javax.swing.JOptionPane;

import MoneyMinder.Transaction;

public class AddIncome extends javax.swing.JFrame {
    
    /**
     * Creates new form MoneyMinder
     */
    public AddIncome() {
        initComponents();
    }
    private static final String INCOME_FILE = "income.txt";
    
    
    /**
     * This method is called from within the constructor to initialize the form.
     * WARNING: Do NOT modify this code. The content of this method is always
     * regenerated by the Form Editor.
     */
    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        PANEL = new javax.swing.JPanel();
        jLabel12 = new javax.swing.JLabel();
        BackIncome = new javax.swing.JButton();
        jPanel1 = new javax.swing.JPanel();
        jLabel13 = new javax.swing.JLabel();
        incomeCategory = new javax.swing.JComboBox<>();
        jLabel14 = new javax.swing.JLabel();
        incomeAmount = new javax.swing.JTextField();
        jLabel15 = new javax.swing.JLabel();
        saveIncome = new javax.swing.JButton();
        incomeDate = new com.toedter.calendar.JDateChooser();
        jPanel2 = new javax.swing.JPanel();
        HomeBtn = new javax.swing.JLabel();
        IncomeBtnPnl1 = new javax.swing.JLabel();
        ExpensesBtnPnl1 = new javax.swing.JLabel();
        AccountsBtnPnl1 = new javax.swing.JLabel();
        ReportsBtnPnl1 = new javax.swing.JLabel();
        jLabel20 = new javax.swing.JLabel();

        setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);

        PANEL.setBackground(new java.awt.Color(255, 255, 255));

        jLabel12.setFont(new java.awt.Font("Segoe UI", 1, 30)); // NOI18N
        jLabel12.setForeground(new java.awt.Color(0, 74, 173));
        jLabel12.setText("ADD INCOME");

        BackIncome.setBackground(new java.awt.Color(0, 0, 153));
        BackIncome.setFont(new java.awt.Font("Segoe UI", 1, 18)); // NOI18N
        BackIncome.setForeground(new java.awt.Color(255, 255, 255));
        BackIncome.setText("BACK");
        BackIncome.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                BackIncomeActionPerformed(evt);
            }
        });

        jLabel13.setFont(new java.awt.Font("Segoe UI", 1, 20)); // NOI18N
        jLabel13.setForeground(new java.awt.Color(0, 74, 173));
        jLabel13.setText("INCOME CATEGORY");

        incomeCategory.setModel(new javax.swing.DefaultComboBoxModel<>(new String[] { "Select Category", "Salary", "Freelance", "Allowance", "Investment", "Business Income" }));

        jLabel14.setFont(new java.awt.Font("Segoe UI", 1, 20)); // NOI18N
        jLabel14.setForeground(new java.awt.Color(0, 74, 173));
        jLabel14.setText("AMOUNT");

        incomeAmount.setHorizontalAlignment(javax.swing.JTextField.RIGHT);
        incomeAmount.setCursor(new java.awt.Cursor(java.awt.Cursor.TEXT_CURSOR));
        incomeAmount.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                incomeAmountActionPerformed(evt);
            }
        });

        jLabel15.setFont(new java.awt.Font("Segoe UI", 1, 20)); // NOI18N
        jLabel15.setForeground(new java.awt.Color(0, 74, 173));
        jLabel15.setText("DATE");

        saveIncome.setBackground(new java.awt.Color(0, 0, 153));
        saveIncome.setFont(new java.awt.Font("Segoe UI", 1, 18)); // NOI18N
        saveIncome.setForeground(new java.awt.Color(255, 255, 255));
        saveIncome.setText("SAVE");
        saveIncome.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                saveIncomeActionPerformed(evt);
            }
        });

        javax.swing.GroupLayout jPanel1Layout = new javax.swing.GroupLayout(jPanel1);
        jPanel1.setLayout(jPanel1Layout);
        jPanel1Layout.setHorizontalGroup(
            jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel1Layout.createSequentialGroup()
                .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(jPanel1Layout.createSequentialGroup()
                        .addGap(171, 171, 171)
                        .addComponent(jLabel14))
                    .addGroup(jPanel1Layout.createSequentialGroup()
                        .addGap(83, 83, 83)
                        .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING, false)
                            .addComponent(incomeCategory, 0, 269, Short.MAX_VALUE)
                            .addComponent(incomeAmount)
                            .addComponent(incomeDate, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))))
                .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
            .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, jPanel1Layout.createSequentialGroup()
                .addGap(0, 125, Short.MAX_VALUE)
                .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, jPanel1Layout.createSequentialGroup()
                        .addComponent(jLabel13)
                        .addGap(118, 118, 118))
                    .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, jPanel1Layout.createSequentialGroup()
                        .addComponent(jLabel15)
                        .addGap(190, 190, 190))
                    .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, jPanel1Layout.createSequentialGroup()
                        .addComponent(saveIncome)
                        .addGap(178, 178, 178))))
        );
        jPanel1Layout.setVerticalGroup(
            jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel1Layout.createSequentialGroup()
                .addGap(40, 40, 40)
                .addComponent(jLabel13)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                .addComponent(incomeCategory, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addGap(30, 30, 30)
                .addComponent(jLabel14)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                .addComponent(incomeAmount, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addGap(30, 30, 30)
                .addComponent(jLabel15)
                .addGap(18, 18, 18)
                .addComponent(incomeDate, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, 45, Short.MAX_VALUE)
                .addComponent(saveIncome)
                .addGap(41, 41, 41))
        );

        jPanel2.setBackground(new java.awt.Color(0, 73, 174));

        HomeBtn.setFont(new java.awt.Font("Segoe UI", 1, 18)); // NOI18N
        HomeBtn.setForeground(new java.awt.Color(255, 255, 255));
        HomeBtn.setText("HOME");
        HomeBtn.addMouseListener(new java.awt.event.MouseAdapter() {
            public void mouseClicked(java.awt.event.MouseEvent evt) {
                HomeBtnMouseClicked(evt);
            }
        });

        IncomeBtnPnl1.setFont(new java.awt.Font("Segoe UI", 1, 18)); // NOI18N
        IncomeBtnPnl1.setForeground(new java.awt.Color(255, 255, 255));
        IncomeBtnPnl1.setText("INCOME");
        IncomeBtnPnl1.addMouseListener(new java.awt.event.MouseAdapter() {
            public void mouseClicked(java.awt.event.MouseEvent evt) {
                IncomeBtnPnl1MouseClicked(evt);
            }
        });

        ExpensesBtnPnl1.setFont(new java.awt.Font("Segoe UI", 1, 18)); // NOI18N
        ExpensesBtnPnl1.setForeground(new java.awt.Color(255, 255, 255));
        ExpensesBtnPnl1.setText("EXPENSES");
        ExpensesBtnPnl1.addMouseListener(new java.awt.event.MouseAdapter() {
            public void mouseClicked(java.awt.event.MouseEvent evt) {
                ExpensesBtnPnl1MouseClicked(evt);
            }
        });

        AccountsBtnPnl1.setFont(new java.awt.Font("Segoe UI", 1, 18)); // NOI18N
        AccountsBtnPnl1.setForeground(new java.awt.Color(255, 255, 255));
        AccountsBtnPnl1.setText("ACCOUNTS");
        AccountsBtnPnl1.addMouseListener(new java.awt.event.MouseAdapter() {
            public void mouseClicked(java.awt.event.MouseEvent evt) {
                AccountsBtnPnl1MouseClicked(evt);
            }
        });

        ReportsBtnPnl1.setFont(new java.awt.Font("Segoe UI", 1, 18)); // NOI18N
        ReportsBtnPnl1.setForeground(new java.awt.Color(255, 255, 255));
        ReportsBtnPnl1.setText("REPORT");
        ReportsBtnPnl1.addMouseListener(new java.awt.event.MouseAdapter() {
            public void mouseClicked(java.awt.event.MouseEvent evt) {
                ReportsBtnPnl1MouseClicked(evt);
            }
        });

        jLabel20.setIcon(new javax.swing.ImageIcon("C:\\Users\\Yunise Madriñan\\Documents\\NetBeansProjects\\MoneyMinder\\src\\main\\java\\assets\\money minder logo.png")); // NOI18N

        javax.swing.GroupLayout jPanel2Layout = new javax.swing.GroupLayout(jPanel2);
        jPanel2.setLayout(jPanel2Layout);
        jPanel2Layout.setHorizontalGroup(
            jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, jPanel2Layout.createSequentialGroup()
                .addGap(15, 15, 15)
                .addComponent(jLabel20)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                .addComponent(HomeBtn)
                .addGap(18, 18, 18)
                .addComponent(IncomeBtnPnl1)
                .addGap(18, 18, 18)
                .addComponent(ExpensesBtnPnl1)
                .addGap(18, 18, 18)
                .addComponent(AccountsBtnPnl1)
                .addGap(18, 18, 18)
                .addComponent(ReportsBtnPnl1)
                .addGap(17, 17, 17))
        );
        jPanel2Layout.setVerticalGroup(
            jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel2Layout.createSequentialGroup()
                .addGap(24, 24, 24)
                .addGroup(jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(IncomeBtnPnl1)
                    .addComponent(HomeBtn)
                    .addComponent(ExpensesBtnPnl1)
                    .addComponent(AccountsBtnPnl1)
                    .addComponent(ReportsBtnPnl1))
                .addContainerGap(25, Short.MAX_VALUE))
            .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, jPanel2Layout.createSequentialGroup()
                .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                .addComponent(jLabel20)
                .addContainerGap())
        );

        javax.swing.GroupLayout PANELLayout = new javax.swing.GroupLayout(PANEL);
        PANEL.setLayout(PANELLayout);
        PANELLayout.setHorizontalGroup(
            PANELLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, PANELLayout.createSequentialGroup()
                .addGap(0, 0, Short.MAX_VALUE)
                .addComponent(BackIncome)
                .addGap(56, 56, 56))
            .addGroup(PANELLayout.createSequentialGroup()
                .addGap(237, 237, 237)
                .addGroup(PANELLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(PANELLayout.createSequentialGroup()
                        .addGap(119, 119, 119)
                        .addComponent(jLabel12))
                    .addComponent(jPanel1, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addContainerGap(260, Short.MAX_VALUE))
            .addComponent(jPanel2, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
        );
        PANELLayout.setVerticalGroup(
            PANELLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(PANELLayout.createSequentialGroup()
                .addComponent(jPanel2, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, 65, Short.MAX_VALUE)
                .addComponent(jLabel12)
                .addGap(18, 18, 18)
                .addComponent(jPanel1, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addGap(53, 53, 53)
                .addComponent(BackIncome)
                .addGap(18, 18, 18))
        );

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addComponent(PANEL, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addComponent(PANEL, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
        );

        pack();
        setLocationRelativeTo(null);
    }// </editor-fold>//GEN-END:initComponents

    private void BackIncomeActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_BackIncomeActionPerformed
        IncomeTransactions incomePanel= new IncomeTransactions();
        incomePanel.show();
     
        dispose();
    }//GEN-LAST:event_BackIncomeActionPerformed

    private void saveIncomeActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_saveIncomeActionPerformed
        SimpleDateFormat dateFormat = new SimpleDateFormat("MM-dd-yyyy");

        String category = incomeCategory.getSelectedItem().toString();
        String amountStr = incomeAmount.getText().trim();
        String date = dateFormat.format(incomeDate.getDate());

        if (category.equals("Select Category")) {
            JOptionPane.showMessageDialog(this, "Please select a valid category.", "Error", JOptionPane.ERROR_MESSAGE);
            return;
        }

        if (!amountStr.isEmpty() && !date.isEmpty()) {
            try {
                double amount = Double.parseDouble(amountStr);
                Transaction income = new Transaction(date, category, amount);

                // Write the income to the file
                try (BufferedWriter writer = new BufferedWriter(new FileWriter(INCOME_FILE, true))) {
                    String formattedAmount = String.format("%.2f", income.getAmount());

                    writer.write(income.getDate() + "," + income.getCategory() + "," + formattedAmount);
                    writer.newLine();
                    writer.flush();

                    incomeCategory.setSelectedIndex(0);
                    incomeAmount.setText("");
                    incomeDate.setDate(null);
                    JOptionPane.showMessageDialog(this, "Transaction Saved!");

                } catch (IOException ex) {
                    ex.printStackTrace();
                    JOptionPane.showMessageDialog(this, "Error adding income. Please try again.", "Error", JOptionPane.ERROR_MESSAGE);
                }

            } catch (NumberFormatException ex) {
                JOptionPane.showMessageDialog(this, "Invalid amount. Please enter a valid number.", "Error", JOptionPane.ERROR_MESSAGE);
            }

        } else {
            JOptionPane.showMessageDialog(this, "Please fill out all fields.", "Error", JOptionPane.ERROR_MESSAGE);
        }
    }//GEN-LAST:event_saveIncomeActionPerformed

    private void incomeAmountActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_incomeAmountActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_incomeAmountActionPerformed

    private void HomeBtnMouseClicked(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_HomeBtnMouseClicked
        Home home= new Home();
        home.show();
        
        dispose();
    }//GEN-LAST:event_HomeBtnMouseClicked

    private void IncomeBtnPnl1MouseClicked(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_IncomeBtnPnl1MouseClicked
        IncomeTransactions incomePanel= new IncomeTransactions();
        incomePanel.show();

        dispose();
    }//GEN-LAST:event_IncomeBtnPnl1MouseClicked

    private void ExpensesBtnPnl1MouseClicked(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_ExpensesBtnPnl1MouseClicked
        ExpensesTransactions expensePanel= new ExpensesTransactions();
        expensePanel.show();

        dispose();
    }//GEN-LAST:event_ExpensesBtnPnl1MouseClicked

    private void AccountsBtnPnl1MouseClicked(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_AccountsBtnPnl1MouseClicked
        Accounts account= new Accounts();
        account.show();

        dispose();
    }//GEN-LAST:event_AccountsBtnPnl1MouseClicked

    private void ReportsBtnPnl1MouseClicked(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_ReportsBtnPnl1MouseClicked
        FinancialReport report= new FinancialReport();
        report.show();

        dispose();
    }//GEN-LAST:event_ReportsBtnPnl1MouseClicked

    /**
     * @param args the command line arguments
     */
    public static void main(String args[]) {
        /* Set the Nimbus look and feel */
        //<editor-fold defaultstate="collapsed" desc=" Look and feel setting code (optional) ">
        /* If Nimbus (introduced in Java SE 6) is not available, stay with the default look and feel.
         * For details see http://download.oracle.com/javase/tutorial/uiswing/lookandfeel/plaf.html 
         */
        try {
            for (javax.swing.UIManager.LookAndFeelInfo info : javax.swing.UIManager.getInstalledLookAndFeels()) {
                if ("Nimbus".equals(info.getName())) {
                    javax.swing.UIManager.setLookAndFeel(info.getClassName());
                    break;
                }
            }
        } catch (ClassNotFoundException ex) {
            java.util.logging.Logger.getLogger(Home.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (InstantiationException ex) {
            java.util.logging.Logger.getLogger(Home.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (IllegalAccessException ex) {
            java.util.logging.Logger.getLogger(Home.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (javax.swing.UnsupportedLookAndFeelException ex) {
            java.util.logging.Logger.getLogger(Home.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        }
        //</editor-fold>
        //</editor-fold>

        /* Create and display the form */
        java.awt.EventQueue.invokeLater(new Runnable() {
            public void run() {
                new Home().setVisible(true);
            }
        });
    }

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JLabel AccountsBtnPnl1;
    private javax.swing.JButton BackIncome;
    private javax.swing.JLabel ExpensesBtnPnl1;
    private javax.swing.JLabel HomeBtn;
    private javax.swing.JLabel IncomeBtnPnl1;
    private javax.swing.JPanel PANEL;
    private javax.swing.JLabel ReportsBtnPnl1;
    private javax.swing.JTextField incomeAmount;
    private javax.swing.JComboBox<String> incomeCategory;
    private com.toedter.calendar.JDateChooser incomeDate;
    private javax.swing.JLabel jLabel12;
    private javax.swing.JLabel jLabel13;
    private javax.swing.JLabel jLabel14;
    private javax.swing.JLabel jLabel15;
    private javax.swing.JLabel jLabel20;
    private javax.swing.JPanel jPanel1;
    private javax.swing.JPanel jPanel2;
    private javax.swing.JButton saveIncome;
    // End of variables declaration//GEN-END:variables
}
