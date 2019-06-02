---
category_name: easy
problem_code: FIBQ
problem_name: 'Fibonacci Queries'
languages_supported:
    - ADA
    - ASM
    - BASH
    - BF
    - C
    - 'C99 strict'
    - CAML
    - CLOJ
    - CLPS
    - 'CPP 4.3.2'
    - 'CPP 4.9.2'
    - CPP14
    - CS2
    - D
    - ERL
    - FORT
    - FS
    - GO
    - HASK
    - ICK
    - ICON
    - JAVA
    - JS
    - 'LISP clisp'
    - 'LISP sbcl'
    - LUA
    - NEM
    - NICE
    - NODEJS
    - 'PAS fpc'
    - 'PAS gpc'
    - PERL
    - PERL6
    - PHP
    - PIKE
    - PRLG
    - PYPY
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: ma5termind
problem_tester: xcwgf666
date_added: 12-01-2016
tags:
    - april16
    - fibonacci
    - ma5termind
    - medium
    - segment
editorial_url: 'http://discuss.codechef.com/problems/FIBQ'
time:
    view_start_date: 1460374200
    submit_start_date: 1460374200
    visible_start_date: 1460374200
    end_date: 1735669800
    current: 1493558145
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/APRIL16/mandarin/FIBQ.pdf), [Russian](http://www.codechef.com/download/translated/APRIL16/russian/FIBQ.pdf) and [Vietnamese](http://www.codechef.com/download/translated/APRIL16/vietnamese/FIBQ.pdf) as well.

Chef's love for Fibonacci numbers helps him to design following interesting problem.

He defines a function **F** for an array **S** as follows:

![](https://s3.amazonaws.com/hr-challenge-images/19693/1459283019-4876ee08cd-image.JPG "image.JPG")

where

- **Si** denotes a **non-empty** subset of multiset **S**.
- **sum(Si)** denotes the sum of all element of multiset **Si**.
- **Fibonacci(x)** denotes the **xth** Fibonacci number.

Given an array **A** consisting of **N** elements. Chef asked you to process following two types of queries on this array accurately and efficiently.

- **C X Y:** Change the value of **Xth** element of array to **Y** i.e **AX = Y**.
- **Q L R:** Compute function **F** over the subarray defined by the elements of array **A** in the range **L** to **R**, both inclusive.

Please see the Note section if you need details regarding Fibonacci function.

### Input

First line of input contains **2** space separated integer **N** and **M** denoting the size of array **A** and the number of queries to be performed. Next line of input contains **N** space separated integers denoting the elements of array **A**. Each of next **M** lines of input contains a query having one of the mentioned two types.

### Output

For each query of type **Q**, output the value of function **F** for the given range of array **A**.

### Constraints

- **1 ≤ N, M ≤ 105**
- **1 ≤ Ai, Y ≤ 109**
- **1 ≤ L, R, X ≤ N**
- type = **{'C', 'Q'}**

### Subtasks

- Subtask 1 (20 points) : **1 ≤ N, M ≤ 1000, 1 ≤ Ai, Y ≤ 106, type = { 'Q' }**
- Subtask 2 (20 points) : **1 ≤ N, M ≤ 50000, 1 ≤ Ai, Y ≤ 109, type = { 'C', Q' }**
- Subtask 3 (30 points) : **1 ≤ N, M ≤ 105, 1 ≤ Ai, Y ≤ 109, type = { 'Q' }**
- Subtask 4 (30 points) : **1 ≤ N, M ≤ 105, 1 ≤ Ai, Y ≤ 109, type = { 'C', Q' }**

### Example

**Input**

<pre>
3 5
1 2 3
Q 1 2
Q 2 3
C 1 2
Q 1 2
Q 1 3

</pre>
**Output**

<pre>
4
8
5
30
</pre>
### Explanation:

- **Q1** : F = Fibonacci(1) + Fibonacci(2) + Fibonacci(1+2) = 4 % 1000000007 = 4
- **Q2** : F = Fibonacci(2) + Fibonacci(3) + Fibonacci(2+3) = 8 % 1000000007 = 8
- **Q3** : A = {2, 2, 3}
- **Q4** : F = Fibonacci(2) + Fibonacci(2) + Fibonacci(2+2) = 5 % 1000000007 = 5
- **Q5** : F = Fibonacci(2) + Fibonacci(2) + Fibonacci(3) + Fibonacci(2+2) + Fibonacci(2+3) + Fibonacci(2+3) + Fibonacci(2+2+3) = 30 % 1000000007 = 30

### Note

**FibonacciK** denotes the **Kth** Fibonacci number. Fibonacci series is defined as follows:

- For **1 ≤ K ≤ 2**, **FibonacciK = 1**
- Otherwise, **FibonacciK = FibonacciK-1 + FibonacciK-2**
Please check this [link](https://en.wikipedia.org/wiki/Fibonacci_number) for more details about Fibonacci numbers.
