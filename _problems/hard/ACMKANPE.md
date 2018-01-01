---
languages_supported:
    - NA
title: ACMKANPE
category: NA
old_version: true
problem_code: ACMKANPE
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

 <a id="x1-6r5" name="x1-6r5"></a> E Algebra Express Input file:stdinOutput file:stdout





Mim is a high school algebra teacher. Just last week, she taught her students how to evaluate an expression. For example, if

r = a × (b + c) − d × e



Given the values of a, b, c, d and e, they can evaluate r.

Now, to test how well her students are able to do these arithmetic, she has to prepare some test. But, she do this every year, and each time she has to make same type of questions. That made her a little bored. She thinks that evaluating an expression only depends on the position of operators and variables, not the variables itself. For example in the expression above, for all possible values of a, b, c, d and e, they will all be equally hard to evaluate.

She has made some generic expressions, and a set of values, which she may use in any order (e.g. one time she may use a = 2, b = 5, another time she may use a = 5, b = 2). Now, she wants to know, the number of possible ways to assign these values, so that, the value of the expression lies within a specified limit.

Input

First line contains T, the number of test cases.

Each test case starts with three integers N(2 ≤ N ≤ 12), l, h (−1012 ≤ l ≤ h ≤ 1012), the number of variables, lower limit and the upper limit of the acceptable expression values.

Next line contains N integers ai(0 ≤ ai ≤ 9), the value of the variables she will be using in the exam.

Next line contains the expression, where each variable is represented as ‘x’. The expression will be well formed, and will contain only the symbols ‘+’, ‘-’, ‘\*’,‘(’,‘)’ and ‘x’.

Output

For each test case, output the number of different assignments, that produce results within the limit \[l, h\].

Note that, you will be replacing each ‘x’ with a value aj(1 ≤ j ≤ N). Each aj have to be used exactly once. Two assignments are considered the same, if, after replacing all ‘x’, the expressions look the same.

Sample input and output

 - - - - - -

- - - - - -

stdin

stdout

- - - - - -

- - - - - -

3

3 1 10

1 2 5

x+x\*x

4 1 10

1 2 2 5

(x+x)\*(x-x)

4 1 100

1 1 1 1

x\*(x-(x\*x))



4

4

0



- - - - - -

- - - - - -
