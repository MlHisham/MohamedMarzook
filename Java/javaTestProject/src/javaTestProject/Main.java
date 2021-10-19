package javaTestProject;

import java.awt.*;
import java.text.NumberFormat;
import java.util.Scanner;

public class Main {

	private static final  Scanner scanner = new Scanner(System.in);
	
	private static void printMortgageFromInput() {
		NumberFormat currency = NumberFormat.getCurrencyInstance();
		System.out.println(currency.format(calculateMortgage(getInput())));
	}
	private static Double calculateMortgage(String[] args) {
		double principal = Double.parseDouble(args[0]);
		double monthlyInterestRate = Double.parseDouble(args[1])/12/100;
		double numberOfPayments = Double.parseDouble(args[2])*12;
		double raisedToNumOfPayments = Math.pow((1+monthlyInterestRate),numberOfPayments);
		double Mortgage =principal*monthlyInterestRate*raisedToNumOfPayments/(raisedToNumOfPayments-1);		
		return Mortgage;
	}
	private static String inputPrincipal() {
		System.out.print("Principal: ");
		String principal = scanner.next();
		return principal;
	}
	private static String inputAnnualInterestRate() {
		System.out.print("Annual Interest Rate: ");
		String annualInterestRate = scanner.next();
		return annualInterestRate;
	}
	private static String inputPeriodInYears() {
		System.out.print("Period (Years): ");
		String periodInYears = scanner.next();
		return periodInYears;
	}
	private static String[] getInput() {
		String[] input = new String[3];
		input[0]= inputPrincipal();
		input[1]= inputAnnualInterestRate();
		input[2]= inputPeriodInYears();
		return input;
	}
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		printMortgageFromInput();
	}

}
