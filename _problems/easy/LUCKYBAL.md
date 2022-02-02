---
category_name: easy
problem_code: LUCKYBAL
problem_name: 'Little Elephant and Balance'
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
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: witua
problem_tester: anton_lunyov
date_added: 1-03-2012
tags:
    - cook22
    - easy
    - witua
editorial_url: 'http://discuss.codechef.com/problems/LUCKYBAL'
time:
    view_start_date: 1337540632
    submit_start_date: 1337540632
    visible_start_date: 1337539200
    end_date: 1735669800
    current: 1493558164
layout: problem
---
All submissions for this problem are available.A Little Elephant from the Zoo of Lviv likes *lucky strings*, i.e., the strings that consist only of the lucky digits **4** and **7**.

The Little Elephant calls some string **T** of the length **M** *balanced* if there exists at least one integer **X** (**1 ≤ X ≤ M**) such that the number of digits **4** in the substring **T\[1, X - 1\]** is equal to the number of digits **7** in the substring **T\[X, M\]**. For example, the string **S = 7477447** is balanced since **S\[1, 4\] = 7477** has 1 digit **4** and **S\[5, 7\] = 447** has 1 digit **7**. On the other hand, one can verify that the string **S = 7** is not balanced.

 The Little Elephant has the string **S** of the length **N**. He wants to know the number of such pairs of integers **(L; R)** that **1 ≤ L ≤ R ≤ N** and the substring **S\[L, R\]**  is balanced. Help him to find this number.

**Notes.**

Let **S** be some lucky string. Then - **|S|** denotes the length of the string **S**;
- **S\[i\]** (**1 ≤ i ≤ |S|**) denotes the **i**th character of **S** (the numeration of characters starts from **1**);
- **S\[L, R\]** (**1 ≤ L ≤ R ≤ |S|**) denotes the string with the following sequence of characters: **S\[L\], S\[L + 1\], ..., S\[R\]**, and is called a *substring* of **S**. For **L &gt; R** we mean by **S\[L, R\]** an empty string.

### Input

The first line of the input file contains a single integer **T**, the number of test cases. Each of the following **T** lines contains one string, the string **S** for the corresponding test case. The input file does not contain any whitespaces.

### Output

For each test case output a single line containing the answer for this test case. ### Constraints

 1 ≤ **T** ≤ 10

 1 ≤ **|S|** ≤ 100000

 **S** consists only of the lucky digits **4** and **7**.

### Example

<pre>
<b>Input:</b>
4
47
74
477
4747477

<b>Output:</b>
2
2
3
23

</pre>
### Explanation

In the first test case balance substrings are **S\[1, 1\] = 4** and **S\[1, 2\] = 47**.

In the second test case balance substrings are **S\[2, 2\] = 4** and **S\[1, 2\] = 74**.

**Unfortunately, we can't provide you with the explanations of the third and the fourth test cases. You should figure it out by yourself. Please, don't ask about this in comments.**
