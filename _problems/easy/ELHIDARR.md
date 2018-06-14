---
category_name: easy
problem_code: ELHIDARR
problem_name: 'Find an element in hidden array'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - PYPY
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - rust
    - SCALA
    - swift
    - D
    - PERL
    - FORT
    - WSPC
    - ADA
    - CAML
    - ICK
    - BF
    - ASM
    - CLPS
    - PRLG
    - ICON
    - 'SCM qobi'
    - PIKE
    - ST
    - NICE
    - LUA
    - BASH
    - NEM
    - 'LISP sbcl'
    - 'LISP clisp'
    - 'SCM guile'
    - JS
    - ERL
    - TCL
    - kotlin
    - PERL6
    - TEXT
    - 'SCM chicken'
    - CLOJ
    - COB
    - FS
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: admin2
problem_tester: null
date_added: 25-11-2017
tags:
    - acm17chn
    - admin2
    - binary
    - chn17rol
    - easy
editorial_url: 'https://discuss.codechef.com/problems/ELHIDARR'
time:
    view_start_date: 1515357000
    submit_start_date: 1515357000
    visible_start_date: 1515357000
    end_date: 1735669800
    current: 1525454367
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.There is an array of length **N** consisting of non-negative integers. The array is sorted in non-decreasing order. Each number in the array appears exactly **K** times, except one element, which appears at least once, but less than **K** times. Your task is to identify that element.

This is an interactive problem. You are only given the integer **N** in the input. Both the array and the value of **K** are hidden. You are allowed to ask the judge the following queries: What is the value of the element at index **i** of the array? Identify the value of the element with frequency less than **K** by asking at most 60 such queries.

### Input and Output

The first line of the input contains a single integer **T** denoting the number of test cases.

For each test case, you should start by reading a single line containing one integer **N** from the input.

You can interact with the judge using the standard input and output. There are two types of operations: to perform one operation, you should print to the standard output a line containing two space-separated integers **type** and **val**.

- If **type** = 1, you are asking the judge a query for the value of the element of the array at index **val**. After printing this line, the judge will print to the standard input a line containing one integer corresponding to the value of the element at index **val**.
- If **type** = 2, you are telling the judge that the element with frequency less than **K** is **val**. For each test case, you should perform this operation exactly once at the end. This is not counted towards the 60 queries.

### Note

Don't forget to flush the standard output after printing each line. It can be done using fflush(stdout) in C/C++, System.out.flush() in Java and sys.out.flush() in Python.

If you ask more than 60 queries, your program will get the verdict Wrong Answer.

### Constraints

- 1 ≤ **T** ≤ 104
- 3 ≤ **N** ≤ 105
- 2 ≤ K ≤ **N - 1**
- each element of the array lies between 1 and 109 inclusive

### Example

<pre>Input / judge feedback	your output
1
3
						1 2
1
						1 3
5
						1 1
1
						2 5
</pre>### Explanation

**Example case 1:** Suppose the array is \[1, 1, 5\]. Note that the value of **K** is 2, but it is hidden from you.

In the first query, you request the value of the 2nd element and the judge answers 1. Then you request the value of the 3rd element and the judge answers 5, then the value of the first element and the judge answers 1.

Now, you tell the judge that the answer is 5. You made a total of 3 queries.
