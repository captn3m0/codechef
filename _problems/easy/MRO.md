---
category_name: easy
problem_code: MRO
problem_name: 'Method Resolution Order'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: wittyceaser
problem_tester: null
date_added: 25-11-2017
tags:
    - acm17chn
    - chn17rol
    - dynamic
    - easy
    - wittyceaser
editorial_url: 'https://discuss.codechef.com/problems/MRO'
time:
    view_start_date: 1515357000
    submit_start_date: 1515357000
    visible_start_date: 1515357000
    end_date: 1735669800
    current: 1525454369
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Zotlin is an object-oriented programming language that provides features such as **Classes** and **Functions**. Zotlin also has the following features:

- A function with the same name and same declarations can have different implementations in different classes.
- Each class can inherit zero or more classes (excluding itself). If **Class A** inherits **Class B**, we say that **Class A** is a _child_ of **Class B**.
- A class cannot inherit another class if a cycle is formed by inheritance.

For example, if Class A inherits Class B and Class B inherits Class C, then Class C cannot inherit Class A.

A Class X is called an ancestor of Class Y, if Y inherits directly or indirectly from Class X. ie, say Class Y inherits from Class Z, which inherits from Class X. Then Class X is an ancestor of both Class Y and Class Z.

Mr. Zourist — a very popular programmer — wrote a program in Zotlin with **N** classes numbered from **1** to **N**. Some of these classes have an implementation of a function **F**. The Zotlin compiler needs to determine which definition of function **F** should be called for an object of **Class 1**.

In order to deterministically decide which implementation of function **F** to use, the compiler uses a list called the **Resolution Order** _(RO list)_. This is a list containing **Class 1** and its ancestors. The compiler iterates through this list to search for a class that contains an implementation of function **F**.

The properties of an RO list are as follows:

- The 1st member of the list is **Class 1**.
- The list contains only the ancestors of Class 1. All the Classes in the list are unique.
- It is guaranteed that **no Class occurs after any of its ancestors** in the list.

Let's define the _**Special RO list**_ as an RO list of length **N** where the **ith** member in the list is **Class i**. That is, the Special RO list is **\[1, 2, 3, ... , N\]**.

Find out the number of distinct class-inheritance hierarchies Mr. Zourist could have created in his program for which one of the valid RO lists is the _Special RO list_. Print your output modulo 109 + 7.

 Two class-inheritance hierarchies are considered different if they have at least one class that inherits a different list of classes.

### Input

The first line of input contains a positive integer **T** - denoting the total number of testcases.

**T** lines follow - the **ith** line contains a single positive integer **N**- denoting the number of classes written by Mr. Zourist.

### Output

For each testcase, print the required number of distinct class-inheritance hierarchies modulo **109 + 7** on a new line.

### Constraints

- **1** ≤ **T** ≤ **105**
- **1** ≤ **N** ≤ **105**

### Example

**Input**```

2
3
6

<b>Output</b>
3
9765
<pre>### Explanation

**Explanation for testcase 1:**

Let "class X" denote that X does not inherit any class

Let "class X(Y)" denote that X inherits Y

Let "class X(Y, Z)" denote that X inherits Y, Z

**First possibility:**

</pre>
class 2
class 3
class 1(2, 3)
<pre>**Second possibility:**

</pre>
class 3
class 1(2)
class 2(3)
<pre>**Third possibility:**

</pre>
class 3
class 1(2, 3)
class 2(3)
<pre>These are the three valid class-inheritance hierarchies, and hence the answer is 3.

 Note that the following hierarchy is not valid:

</pre>
        class 1(2)
        class 2
        class 3
    
<pre> This is because 3 should have been an ancestor of 1, but in the above hierarchy, 3 is a stand-alone class.
