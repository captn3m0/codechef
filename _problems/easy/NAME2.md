---
category_name: easy
problem_code: NAME2
problem_name: 'Your Name is Mine'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: kaushik_iska
problem_tester: pieguy
date_added: 27-03-2013
tags:
    - ad
    - cakewalk
    - kaushik_iska
    - may13
editorial_url: 'http://discuss.codechef.com/problems/NAME2'
time:
    view_start_date: 1368440969
    submit_start_date: 1368440969
    visible_start_date: 1368440969
    end_date: 1735669800
    current: 1493558171
layout: problem
---
All submissions for this problem are available.In an attempt to control the rise in population, **Archer** was asked to come up with a plan. This time he is targeting marriages. Archer, being as intelligent as he is, came up with the following plan:

A man with name **M** is allowed to marry a woman with name **W**, only if **M** is a [subsequence](http://en.wikipedia.org/wiki/Subsequence) of **W** or **W** is a subsequence of **M**.

**A** is said to be a subsequence of **B**, if **A** can be obtained by deleting some elements of **B** without changing the order of the remaining elements.

Your task is to determine whether a couple is allowed to marry or not, according to Archer's rule.

### Input

The first line contains an integer **T**, the number of test cases. **T** test cases follow. Each test case contains two space separated strings **M** and **W**.

### Output

For each test case print `"YES"` if they are allowed to marry, else print `"NO"`. (quotes are meant for clarity, please don't print them)

### Constraints

- **1 ≤ T ≤ 100**
- **1 ≤ |M|, |W| ≤ 25000 (|A| denotes the length of the string A.)**
- All names consist of lowercase English letters only.

### Example

<pre>
<b>Input:</b>
3
john johanna
ira ira
kayla jayla

<b>Output:</b>
YES
YES
NO

</pre>### Explanation
**Case 1:** Consider **S = "johanna"**. So, **S\[0\] = 'j', S\[1\] = 'o', S\[2\] = 'h'** and so on. If we remove the indices \[3, 4, 6\] or \[3, 5, 6\] from S, it becomes **"john"**. Hence **"john"** is a subsequence of **S**, so the answer is "YES".

**Case 2:** Any string is a subsequence of it self, as it is formed after removing **"0"** characters. Hence the answer is **"YES"**.

**Case 3:** **"jayla"** can not be attained from **"kayla"** as removing any character from **"kayla"** would make the string length smaller than **"jayla"**, also there is no **'j'** in **"kayla"**. Similar reasoning can be applied to see why **"kayla"** can't be attained from **"jayla"**. Hence the answer is "NO".
