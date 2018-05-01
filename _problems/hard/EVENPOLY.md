---
languages_supported:
    - NA
title: EVENPOLY
category: NA
old_version: true
problem_code: EVENPOLY
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

In this problem, you are given a polynomial P over multiple variables with integer coefficients and your task is simply to determine if all of the coefficients are even or not.

Unfortunately, you will not be given an explicit description of the polynomial. Rather, you will be given a square matrix whose entries are polynomials and the polynomial P is the determinant of this matrix.

Here, we are defining the determinant of a matrix by the usual cofactor expansion formula. That is, say the matrix M is of size d x d and denote the polynomial located at row i, column j by Mi,j for any i,j between 1 and d. For a permutation X on the set {1,2,...,d}, let sgn(X) be (-1)inv(X) where inv(X) is the number of pairs 1 ≤ i < j ≤ d with X(i) > X(j) (_i.e._ the number of inversions of X). Then the determinant of M is the sum, over all permutations X, of the products sgn(X)M1,X(1)M2,X(2)...Md,X(d).

### Input

The first line consists of a value k ≤ 30 indicating the number of test cases. Each test case begins with a single line containing an integer d, 1 ≤ d ≤ 40 indicating the order of the matrix. Then, d lines follow where each contains d strings describing the polynomials. The j'th string on the i'th line describes entry Mi,j of the polynomial matrix. The d strings on a single line are separated by a single space.

Each polynomial is given by a string of length between 1 and 100. A monomial is either the string '0', or the string '1', or a string of lowercase characters 'a','b', ..., 'z'. A polynomial is then a sequence of monomials separated by '+' with no spaces. The monomials '0' or '1' are simply the respective constant polynomials and a monomial consisting of a string of lowercase letters is simply the product of variables a, b, ..., z where the power of a letter, say L, is exactly the number of times it appears in the string. For example, "1+aba" is the string representing the polynomial 1+a2b and "0+xy+yx" represents the polynomial 2xy.

### Output

The output for each test case consists of a single line containing the message "All Even" or "Some Odd" to indicate if all coefficients of the polynomial represented by the determinant of the matrix are even or if there is at least one odd coefficient, respectively.

### Example

<pre>
<b>Input:</b>
3
2
x+1 0
0 x
3
x y z
y z x
xx+xy xy+xz xx+xz
1
a+a

<b>Output:</b>
Some Odd
All Even
All Even
</pre>### Explanation of Sample Data

The determinant in the first test case is simply x2+x which has two odd coefficients. A tedious calculation shows that the determinant in the second test case is actually 0. The last test case has determinant 2a, so all coefficients are even.
