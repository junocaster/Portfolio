package exportmoneyminder;

import java.awt.GridBagLayout;
import javax.swing.*;
import javax.swing.table.DefaultTableModel;
import java.io.*;

public class Accounts extends javax.swing.JFrame {

    /**
     * Creates new form MoneyMinder
     */
    public Accounts() {
        super();
        initComponents();
        loadAccountsFromFile();
        accountTable.setAutoCreateRowSorter(true);
    }
    public static void AddRowToAccountTable(Object[] data)
    {
        DefaultTableModel model = (DefaultTableModel) accountTable.getModel();
        String name = (String) data[0];
        String type = (String) data[1];
        String amount = "P " + String.format("%.2f", Double.parseDouble(data[2].toString()));
        model.addRow(new Object[]{name, type, amount});
    }
    private static final String ACCOUNTS_FILE = "accounts.txt";
    
    
    public static void saveAccountsToFile() {
        try (BufferedWriter writer = new BufferedWriter(new FileWriter(ACCOUNTS_FILE))) {
            for (int row = 0; row < accountTable.getRowCount(); row++) {
                String name = (String) accountTable.getValueAt(row, 0);
                String type = (String) accountTable.getValueAt(row, 1);
                double amount = Double.parseDouble(accountTable.getValueAt(row, 2).toString().replace("P ", ""));

                String formattedAmount = String.format("%.2f", amount);

                writer.write(name + ", " + type + ", " + "P " + formattedAmount);
                writer.newLine();
            }
        } catch (IOException e) {
            JOptionPane.showMessageDialog(null, "Error saving accounts to file: " + e.getMessage(),
                    "File Error", JOptionPane.ERROR_MESSAGE);
        }  
    }

    private static void loadAccountsFromFile() {
        try (BufferedReader reader = new BufferedReader(new FileReader(ACCOUNTS_FILE))) {
            String line;
            DefaultTableModel model = (DefaultTableModel) accountTable.getModel();
            while ((line = reader.readLine()) != null) {
                String[] parts = line.split(",");
                if (parts.length == 3) {
                    String name = parts[0].trim();
                    String type = parts[1].trim();
                    String amount = parts[2].trim();
                    model.addRow(new Object[]{name, type, amount});
                }
            }
        } catch (IOException e) {
            JOptionPane.showMessageDialog(null, "Error loading accounts from file: " + e.getMessage(),
                    "File Error", JOptionPane.ERROR_MESSAGE);
        }
    }
    
    private boolean isNumeric(String str) {
    try {
        Double.parseDouble(str);
        return true;
    } catch (NumberFormatException e) {
        return false;
    }
}
    /**
     * This method is called from within the constructor to initialize the form.
     * WARNING: Do NOT modify this code. The content of this method is always
     * regenerated by the Form Editor.
     */
    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        PANEL = new javax.swing.JPanel();
        jLabel13 = new javax.swing.JLabel();
        jScrollPane1 = new javax.swing.JScrollPane();
        accountTable = new javax.swing.JTable();
        editAcc = new javax.swing.JButton();
        delAcc = new javax.swing.JButton();
        addAcc = new javax.swing.JButton();
        BackHome = new javax.swing.JButton();
        jPanel12 = new javax.swing.JPanel();
        HomeBtn10 = new javax.swing.JLabel();
        IncomeBtnPnl10 = new javax.swing.JLabel();
        ExpensesBtnPnl10 = new javax.swing.JLabel();
        AccountsBtnPnl10 = new javax.swing.JLabel();
        ReportsBtnPnl10 = new javax.swing.JLabel();
        jLabel29 = new javax.swing.JLabel();

        setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);

        PANEL.setBackground(new java.awt.Color(255, 255, 255));

        jLabel13.setFont(new java.awt.Font("Segoe UI", 1, 30)); // NOI18N
        jLabel13.setForeground(new java.awt.Color(0, 74, 173));
        jLabel13.setText("ACCOUNTS TRACKER");

        accountTable.setModel(new javax.swing.table.DefaultTableModel(
            new Object [][] {

            },
            new String [] {
                "Account Name", "Account Type", "Current Balance"
            }
        )
        {
            public boolean isCellEditable(int row, int column) {
                return false;
            }
        }
    );
    jScrollPane1.setViewportView(accountTable);

    editAcc.setBackground(new java.awt.Color(0, 0, 153));
    editAcc.setFont(new java.awt.Font("Segoe UI", 1, 18)); // NOI18N
    editAcc.setForeground(new java.awt.Color(255, 255, 255));
    editAcc.setText("  EDIT  ");
    editAcc.addActionListener(new java.awt.event.ActionListener() {
        public void actionPerformed(java.awt.event.ActionEvent evt) {
            editAccActionPerformed(evt);
        }
    });

    delAcc.setBackground(new java.awt.Color(0, 0, 153));
    delAcc.setFont(new java.awt.Font("Segoe UI", 1, 18)); // NOI18N
    delAcc.setForeground(new java.awt.Color(255, 255, 255));
    delAcc.setText("DELETE");
    delAcc.addActionListener(new java.awt.event.ActionListener() {
        public void actionPerformed(java.awt.event.ActionEvent evt) {
            delAccActionPerformed(evt);
        }
    });

    addAcc.setBackground(new java.awt.Color(0, 0, 153));
    addAcc.setFont(new java.awt.Font("Segoe UI", 1, 18)); // NOI18N
    addAcc.setForeground(new java.awt.Color(255, 255, 255));
    addAcc.setText("   ADD   ");
    addAcc.addActionListener(new java.awt.event.ActionListener() {
        public void actionPerformed(java.awt.event.ActionEvent evt) {
            addAccActionPerformed(evt);
        }
    });

    BackHome.setBackground(new java.awt.Color(0, 0, 153));
    BackHome.setFont(new java.awt.Font("Segoe UI", 1, 18)); // NOI18N
    BackHome.setForeground(new java.awt.Color(255, 255, 255));
    BackHome.setText("BACK");
    BackHome.addActionListener(new java.awt.event.ActionListener() {
        public void actionPerformed(java.awt.event.ActionEvent evt) {
            BackHomeActionPerformed(evt);
        }
    });

    jPanel12.setBackground(new java.awt.Color(0, 73, 174));

    HomeBtn10.setFont(new java.awt.Font("Segoe UI", 1, 18)); // NOI18N
    HomeBtn10.setForeground(new java.awt.Color(255, 255, 255));
    HomeBtn10.setText("HOME");
    HomeBtn10.addMouseListener(new java.awt.event.MouseAdapter() {
        public void mouseClicked(java.awt.event.MouseEvent evt) {
            HomeBtn10MouseClicked(evt);
        }
    });

    IncomeBtnPnl10.setFont(new java.awt.Font("Segoe UI", 1, 18)); // NOI18N
    IncomeBtnPnl10.setForeground(new java.awt.Color(255, 255, 255));
    IncomeBtnPnl10.setText("INCOME");
    IncomeBtnPnl10.addMouseListener(new java.awt.event.MouseAdapter() {
        public void mouseClicked(java.awt.event.MouseEvent evt) {
            IncomeBtnPnl10MouseClicked(evt);
        }
    });

    ExpensesBtnPnl10.setFont(new java.awt.Font("Segoe UI", 1, 18)); // NOI18N
    ExpensesBtnPnl10.setForeground(new java.awt.Color(255, 255, 255));
    ExpensesBtnPnl10.setText("EXPENSES");
    ExpensesBtnPnl10.addMouseListener(new java.awt.event.MouseAdapter() {
        public void mouseClicked(java.awt.event.MouseEvent evt) {
            ExpensesBtnPnl10MouseClicked(evt);
        }
    });

    AccountsBtnPnl10.setFont(new java.awt.Font("Segoe UI", 1, 18)); // NOI18N
    AccountsBtnPnl10.setForeground(new java.awt.Color(255, 255, 255));
    AccountsBtnPnl10.setText("ACCOUNTS");
    AccountsBtnPnl10.addMouseListener(new java.awt.event.MouseAdapter() {
        public void mouseClicked(java.awt.event.MouseEvent evt) {
            AccountsBtnPnl10MouseClicked(evt);
        }
    });

    ReportsBtnPnl10.setFont(new java.awt.Font("Segoe UI", 1, 18)); // NOI18N
    ReportsBtnPnl10.setForeground(new java.awt.Color(255, 255, 255));
    ReportsBtnPnl10.setText("REPORT");
    ReportsBtnPnl10.addMouseListener(new java.awt.event.MouseAdapter() {
        public void mouseClicked(java.awt.event.MouseEvent evt) {
            ReportsBtnPnl10MouseClicked(evt);
        }
    });

    jLabel29.setIcon(new javax.swing.ImageIcon("C:\\Users\\Yunise Madriñan\\Documents\\NetBeansProjects\\MoneyMinder\\src\\main\\java\\assets\\money minder logo.png")); // NOI18N

    javax.swing.GroupLayout jPanel12Layout = new javax.swing.GroupLayout(jPanel12);
    jPanel12.setLayout(jPanel12Layout);
    jPanel12Layout.setHorizontalGroup(
        jPanel12Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
        .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, jPanel12Layout.createSequentialGroup()
            .addGap(14, 14, 14)
            .addComponent(jLabel29)
            .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
            .addComponent(HomeBtn10)
            .addGap(18, 18, 18)
            .addComponent(IncomeBtnPnl10)
            .addGap(18, 18, 18)
            .addComponent(ExpensesBtnPnl10)
            .addGap(18, 18, 18)
            .addComponent(AccountsBtnPnl10)
            .addGap(18, 18, 18)
            .addComponent(ReportsBtnPnl10)
            .addGap(17, 17, 17))
    );
    jPanel12Layout.setVerticalGroup(
        jPanel12Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
        .addGroup(jPanel12Layout.createSequentialGroup()
            .addGroup(jPanel12Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                .addGroup(jPanel12Layout.createSequentialGroup()
                    .addGap(24, 24, 24)
                    .addGroup(jPanel12Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                        .addComponent(IncomeBtnPnl10)
                        .addComponent(HomeBtn10)
                        .addComponent(ExpensesBtnPnl10)
                        .addComponent(AccountsBtnPnl10)
                        .addComponent(ReportsBtnPnl10)))
                .addGroup(jPanel12Layout.createSequentialGroup()
                    .addContainerGap()
                    .addComponent(jLabel29)))
            .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
    );

    javax.swing.GroupLayout PANELLayout = new javax.swing.GroupLayout(PANEL);
    PANEL.setLayout(PANELLayout);
    PANELLayout.setHorizontalGroup(
        PANELLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
        .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, PANELLayout.createSequentialGroup()
            .addContainerGap(135, Short.MAX_VALUE)
            .addGroup(PANELLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, PANELLayout.createSequentialGroup()
                    .addComponent(BackHome)
                    .addGap(52, 52, 52))
                .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, PANELLayout.createSequentialGroup()
                    .addComponent(addAcc)
                    .addGap(46, 46, 46)
                    .addComponent(editAcc)
                    .addGap(47, 47, 47)
                    .addComponent(delAcc)
                    .addGap(272, 272, 272))
                .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, PANELLayout.createSequentialGroup()
                    .addComponent(jScrollPane1, javax.swing.GroupLayout.PREFERRED_SIZE, 696, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addGap(99, 99, 99))
                .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, PANELLayout.createSequentialGroup()
                    .addComponent(jLabel13)
                    .addGap(281, 281, 281))))
        .addComponent(jPanel12, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
    );
    PANELLayout.setVerticalGroup(
        PANELLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
        .addGroup(PANELLayout.createSequentialGroup()
            .addComponent(jPanel12, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
            .addGap(32, 32, 32)
            .addComponent(jLabel13)
            .addGap(18, 18, 18)
            .addComponent(jScrollPane1, javax.swing.GroupLayout.PREFERRED_SIZE, 386, javax.swing.GroupLayout.PREFERRED_SIZE)
            .addGap(27, 27, 27)
            .addGroup(PANELLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                .addComponent(editAcc, javax.swing.GroupLayout.PREFERRED_SIZE, 36, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addComponent(delAcc, javax.swing.GroupLayout.PREFERRED_SIZE, 36, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addComponent(addAcc, javax.swing.GroupLayout.PREFERRED_SIZE, 36, javax.swing.GroupLayout.PREFERRED_SIZE))
            .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
            .addComponent(BackHome)
            .addContainerGap(43, Short.MAX_VALUE))
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

    private void addAccActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_addAccActionPerformed
        accountEntry frameText = new accountEntry();
        frameText.setVisible(true);
        frameText.pack();
        frameText.setLocationRelativeTo(null);
        frameText.setDefaultCloseOperation(accountEntry.DISPOSE_ON_CLOSE);
    }//GEN-LAST:event_addAccActionPerformed

    private void BackHomeActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_BackHomeActionPerformed
        Home home= new Home();
        home.show();

        dispose();
    }//GEN-LAST:event_BackHomeActionPerformed

    private void delAccActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_delAccActionPerformed
        DefaultTableModel model = (DefaultTableModel) accountTable.getModel();
        if (accountTable.getSelectedRowCount() == 1) {
        int option = JOptionPane.showConfirmDialog(this, 
  "Are you sure you want to delete this account?", "Confirm Deletion", JOptionPane.YES_NO_OPTION);
        if (option == JOptionPane.YES_OPTION) {
            model.removeRow(accountTable.getSelectedRow());
            saveAccountsToFile();
        }
        } else {
            if (accountTable.getRowCount() == 0) {
                JOptionPane.showMessageDialog(this, "Table is Empty.");
            } else {
                JOptionPane.showMessageDialog(this, "Please select a row to delete.");
            }
        }
    }//GEN-LAST:event_delAccActionPerformed

    private void editAccActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_editAccActionPerformed
    DefaultTableModel model = (DefaultTableModel) accountTable.getModel();
    int selectedRowIndex = accountTable.getSelectedRow();

    if (selectedRowIndex != -1) {
        String name = model.getValueAt(selectedRowIndex, 0).toString();
        String type = model.getValueAt(selectedRowIndex, 1).toString();
        String balance = model.getValueAt(selectedRowIndex, 2).toString().replace("P ", "");

        // Create a panel with components
        JPanel panel = new JPanel(new GridBagLayout());
        Object[] accountType = {"Savings", "Checking", "Investment"};
        JComboBox comboBox= new JComboBox(accountType);
        comboBox.setSelectedItem(type);

        String newName = JOptionPane.showInputDialog(null, "Enter Name", name);
            if (newName == null) {
            // Editing canceled, no changes made
            return;
        }
    
        
        JOptionPane.showMessageDialog(null, comboBox, "Enter Category", JOptionPane.QUESTION_MESSAGE);
        panel.add(comboBox);
        String newType = (String) comboBox.getSelectedItem();
        String newBalance = JOptionPane.showInputDialog(null, "Enter Balance", balance);

        if (newName.trim().isEmpty()) {
            JOptionPane.showMessageDialog(this, "Name cannot be empty.", "Error", JOptionPane.ERROR_MESSAGE);
            return;
        }

        if (newType.trim().isEmpty()) {
            JOptionPane.showMessageDialog(this, "Please select an account type.", "Error", JOptionPane.ERROR_MESSAGE);
            return;
        }

        if (newBalance.trim().isEmpty() || !isNumeric(newBalance)) {
            JOptionPane.showMessageDialog(this, "Invalid balance. Please enter a valid number.", "Error", JOptionPane.ERROR_MESSAGE);
            return;
        }

        String formattedAmount = String.format("%.2f", Double.parseDouble(newBalance));

        // Update the model with the new data
        model.setValueAt(newName, selectedRowIndex, 0);
        model.setValueAt(newType, selectedRowIndex, 1);
        model.setValueAt("P " + formattedAmount, selectedRowIndex, 2);

        saveAccountsToFile();
    } else {
        JOptionPane.showMessageDialog(this, "Please select a row to edit.", "Error", JOptionPane.ERROR_MESSAGE);
    }
    }//GEN-LAST:event_editAccActionPerformed

    private void HomeBtn10MouseClicked(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_HomeBtn10MouseClicked
    Home home= new Home();
    home.show();
        
    dispose();
    }//GEN-LAST:event_HomeBtn10MouseClicked

    private void IncomeBtnPnl10MouseClicked(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_IncomeBtnPnl10MouseClicked
        IncomeTransactions incomePanel= new IncomeTransactions();
        incomePanel.show();

        dispose();
    }//GEN-LAST:event_IncomeBtnPnl10MouseClicked

    private void ExpensesBtnPnl10MouseClicked(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_ExpensesBtnPnl10MouseClicked
        ExpensesTransactions expensePanel= new ExpensesTransactions();
        expensePanel.show();

        dispose();
    }//GEN-LAST:event_ExpensesBtnPnl10MouseClicked

    private void AccountsBtnPnl10MouseClicked(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_AccountsBtnPnl10MouseClicked
        Accounts account= new Accounts();
        account.show();

        dispose();
    }//GEN-LAST:event_AccountsBtnPnl10MouseClicked

    private void ReportsBtnPnl10MouseClicked(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_ReportsBtnPnl10MouseClicked
        FinancialReport report= new FinancialReport();
        report.show();

        dispose();
    }//GEN-LAST:event_ReportsBtnPnl10MouseClicked

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
    private javax.swing.JLabel AccountsBtnPnl;
    private javax.swing.JLabel AccountsBtnPnl10;
    private javax.swing.JLabel AccountsBtnPnl2;
    private javax.swing.JLabel AccountsBtnPnl3;
    private javax.swing.JLabel AccountsBtnPnl4;
    private javax.swing.JLabel AccountsBtnPnl5;
    private javax.swing.JLabel AccountsBtnPnl6;
    private javax.swing.JLabel AccountsBtnPnl7;
    private javax.swing.JLabel AccountsBtnPnl8;
    private javax.swing.JLabel AccountsBtnPnl9;
    private javax.swing.JButton BackHome;
    private javax.swing.JLabel ExpensesBtnPnl;
    private javax.swing.JLabel ExpensesBtnPnl10;
    private javax.swing.JLabel ExpensesBtnPnl2;
    private javax.swing.JLabel ExpensesBtnPnl3;
    private javax.swing.JLabel ExpensesBtnPnl4;
    private javax.swing.JLabel ExpensesBtnPnl5;
    private javax.swing.JLabel ExpensesBtnPnl6;
    private javax.swing.JLabel ExpensesBtnPnl7;
    private javax.swing.JLabel ExpensesBtnPnl8;
    private javax.swing.JLabel ExpensesBtnPnl9;
    private javax.swing.JLabel HomeBtn;
    private javax.swing.JLabel HomeBtn1;
    private javax.swing.JLabel HomeBtn10;
    private javax.swing.JLabel HomeBtn2;
    private javax.swing.JLabel HomeBtn3;
    private javax.swing.JLabel HomeBtn4;
    private javax.swing.JLabel HomeBtn6;
    private javax.swing.JLabel HomeBtn7;
    private javax.swing.JLabel HomeBtn8;
    private javax.swing.JLabel HomeBtn9;
    private javax.swing.JLabel IncomeBtnPnl;
    private javax.swing.JLabel IncomeBtnPnl10;
    private javax.swing.JLabel IncomeBtnPnl2;
    private javax.swing.JLabel IncomeBtnPnl3;
    private javax.swing.JLabel IncomeBtnPnl4;
    private javax.swing.JLabel IncomeBtnPnl5;
    private javax.swing.JLabel IncomeBtnPnl6;
    private javax.swing.JLabel IncomeBtnPnl7;
    private javax.swing.JLabel IncomeBtnPnl8;
    private javax.swing.JLabel IncomeBtnPnl9;
    private javax.swing.JPanel PANEL;
    private javax.swing.JLabel ReportsBtnPnl;
    private javax.swing.JLabel ReportsBtnPnl10;
    private javax.swing.JLabel ReportsBtnPnl2;
    private javax.swing.JLabel ReportsBtnPnl3;
    private javax.swing.JLabel ReportsBtnPnl4;
    private javax.swing.JLabel ReportsBtnPnl5;
    private javax.swing.JLabel ReportsBtnPnl6;
    private javax.swing.JLabel ReportsBtnPnl7;
    private javax.swing.JLabel ReportsBtnPnl8;
    private javax.swing.JLabel ReportsBtnPnl9;
    private static javax.swing.JTable accountTable;
    private javax.swing.JButton addAcc;
    private javax.swing.JButton delAcc;
    private javax.swing.JButton editAcc;
    private javax.swing.JLabel jLabel13;
    private javax.swing.JLabel jLabel20;
    private javax.swing.JLabel jLabel21;
    private javax.swing.JLabel jLabel22;
    private javax.swing.JLabel jLabel23;
    private javax.swing.JLabel jLabel24;
    private javax.swing.JLabel jLabel25;
    private javax.swing.JLabel jLabel26;
    private javax.swing.JLabel jLabel27;
    private javax.swing.JLabel jLabel28;
    private javax.swing.JLabel jLabel29;
    private javax.swing.JPanel jPanel10;
    private javax.swing.JPanel jPanel11;
    private javax.swing.JPanel jPanel12;
    private javax.swing.JPanel jPanel2;
    private javax.swing.JPanel jPanel3;
    private javax.swing.JPanel jPanel4;
    private javax.swing.JPanel jPanel5;
    private javax.swing.JPanel jPanel6;
    private javax.swing.JPanel jPanel8;
    private javax.swing.JPanel jPanel9;
    private javax.swing.JScrollPane jScrollPane1;
    // End of variables declaration//GEN-END:variables
}
