---
category_name: medium
problem_code: LUCKYSWP
problem_name: 'Little Elephant and Swapping'
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
    - medium
    - witua
editorial_url: 'http://discuss.codechef.com/problems/LUCKYSWP'
time:
    view_start_date: 1337540935
    submit_start_date: 1337540935
    visible_start_date: 1337539200
    end_date: 1735669800
    current: 1493557770
layout: problem
---
All submissions for this problem are available.A Little Elephant from the Zoo of Lviv likes *lucky strings*, i.e., the strings that consist only of the lucky digits **4** and **7**.

He is now studying some special transformation defined on the set of the lucky strings. The lucky string **T** is called a *swap permutation* of the lucky string **S** with **|S| = N** if it can be derived from **S** by the following process. - Choose some integers **L** and **R** such that **1 ≤ L ≤ R ≤ N**.
- Denote by **A** the substring **S\[L, R\]** and by **B** the concatenation **S\[1, L - 1\] + S\[R + 1, N\]**.
- Choose some integer **K** such that **0 ≤ K ≤ |B|**.
- Put **T = B\[1, K\] + A + B\[K + 1, |B|\]**.


In other words, **T** is a swap permutation of **S** if it can be obtained from **S** by deleting some non-empty substring from **S** and then inserting it back into any position of **S**. Note that **S** is always a swap permutation of itself.

Denote by **F(S)** the length of the longest non-decreasing subsequence of **S**. In other words, this subsequence should have one of the following forms: **444...444**, **777...777**, **444...444777...777**.

 The Little Elephant has the lucky string **S** and as an experienced theoretical scientist he is interested in some quite theoretical problem. Namely, he wants to find the maximal value of **F(T)** if **T** can be an arbitrary swap permutation of **S**. Help him and find this value.

**Notes.**

Let **S** be some lucky string. Then - **|S|** denotes the length of the string **S**;
- **S\[i\]** (**1 ≤ i ≤ |S|**) denotes the **i**th character of **S** (the numeration of characters starts from **1**);
- **S\[L, R\]** (**1 ≤ L ≤ R ≤ |S|**) denotes the string with the following sequence of characters: **S\[L\], S\[L + 1\], ..., S\[R\]**, and is called a *substring* of **S**. For **L &gt; R** we mean by **S\[L, R\]** an empty string.


For any two lucky strings **S** and **T** their *concatenation* is defined as the sequence of characters in **S** followed by the sequence of characters in **T**, and is denoted by **S + T**.

The string **T** is called a *subsequence* of the string **S** if **T** can be derived from **S** by deleting some (possibly zero) number of characters without changing the order of the remaining characters. For example, **T = 474** is a subsequence of **S = 74477747** since after deleting characters at positions **1, 2, 5, 6, 8** from **S** we obtain **T**. Note that, the empty string and the string **S** itself are always the subsequences of **S**.

### Input

The first line of the input file contains a single integer **T**, the number of test cases. Each of the following **T** lines contains one string, the string **S** for the corresponding test case. The input file does not contain any whitespaces.

### Output

For each test case, output a single line containing the answer for this test case, that is, **max{F(T) : T is a swap permutation of S}**.

### Constraints

 1 ≤ **T** ≤ 10

 1 ≤ **|S|** ≤ 100000

 **S** consists only of the lucky digits **4** and **7**.

### Example

<pre>
<b>Input:</b>
5
7474
47
47744
7744
474747447444474

<b>Output:</b>
3
2
5
4
11

</pre>
### Explanation

In the first test case all different swap permutations of **S = 7474** are **4747, 4774, 7447, 7474, 7744**. Corresponding values of **F(T)** are **3, 3, 3, 2, 2**. Hence the answer is **3**.

In the second, third and fourth test cases there exists a non-decreasing swap permutation and hence the answer is equal to the length of the string. Namely, **S = 47** is itself non-decreasing, for **S = 47744** we can obtain the non-decreasing **T = 44477** if we delete the substring **S\[2,3\] = 77** and then insert it back into the end of the string, finally, for **S = 7744** we can obtain the non-decreasing **T = 4477** if we delete the substring **S\[1,2\] = 77** and then insert it back into the end of the string.
