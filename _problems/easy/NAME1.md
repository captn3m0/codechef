---
category_name: easy
problem_code: NAME1
problem_name: 'Name Reduction'
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
editorial_url: 'http://discuss.codechef.com/problems/NAME1'
time:
    view_start_date: 1368440947
    submit_start_date: 1368441000
    visible_start_date: 1368441000
    end_date: 1735669800
    current: 1493558169
layout: problem
---
All submissions for this problem are available.In an attempt to reduce the growing population, **Archer** was asked to come up with a plan. **Archer** being as intelligent as he is, came up with the following plan:

If **N** children, with names **C1, C2, ..., CN**, are born to parents with names **A** and **B**, and you consider **C** to be the [concatenation](http://en.wikipedia.org/wiki/Concatenation) of all the names of the children, i.e. **C = C1 + C2 + ... + CN** (where **+** is concatenation operator), then **C** should be a substring of one of the permutations of **A + B**.

You are given the task to verify whether the names parents propose to give their children are in fact permissible by Archer's plan or not.

### Input

The first line contains an integer **T**, the number of test cases. **T** test cases follow. Each test case stats with a line containing two space separated strings **A** and **B**, denoting the names of the parents. The next line contains a single integer **N** denoting the number of children **A** and **B** are planning to have. Following this are **N** lines, the **i'th** line containing **Ci**, the proposed name for the **i'th** child.

### Output

For each test case output a single line containing `"YES"` if the names are permissible by Archer's plan, otherwise print `"NO"`. (quotes are meant for clarity, please don't print them)

### Constraints

- **1 ≤ T ≤ 100**
- **1 ≤ N ≤ 1000**
- **The lengths of all the strings including A, B, and all Ci will be in the range \[1, 40000\], both inclusive. All these strings will contain only lowercase English letters.**
- **The combined lengths of all names of children will not exceed the combined length of the names of their parents.**

### Example

<pre>
<b>Input:</b>
3
tom marvoloriddle
2
lord
voldemort
cheap up
1
heapcup
bruce wayne
2
bat
man

<b>Output:</b>
YES
YES
NO
</pre>### Explanation:

Let **Y** denote the concatenation of names of all the children, and **X** denote the concatenation of the names of the parents.

**Case 1:** Here **X = "tommarvoloriddle"**, and **Y = "lordvoldemort"**. Consider **Z = "iamlordvoldemort"**. It is not difficult to see that **Z** is a permutation of **X** and **Y** is a substring of **Z**. Hence **Y** is a substring of a permutation of **X**, so the answer is "YES".

**Case 2:** Here **X = "cheapup"**, and **Y = "heapcup"**. Since **Y** in itself is a permutation of **X**, and as every string is a substring of itself, **Y** is a substring of **X** and also a permutation of **X**. Hence "YES".

**Case 3:** Here **X = "brucewayne"**, and **Y = "batman"**. As "t" is not present in **X**, "t" wont be present in any permutation of **X**, hence the answer is "NO".
