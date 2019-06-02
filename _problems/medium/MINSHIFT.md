---
category_name: medium
problem_code: MINSHIFT
problem_name: 'Cyclic Shifts'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: xcwgf666
problem_tester: 'kevinsogo,xcwgf666'
date_added: 8-06-2016
tags:
    - medium
    - segment
    - snckpb16
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/MINSHIFT'
time:
    view_start_date: 1465831800
    submit_start_date: 1465831800
    visible_start_date: 1465831800
    end_date: 1735669800
    current: 1493557923
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCKPB16/mandarin/MINSHIFT.pdf), [Russian](http://www.codechef.com/download/translated/SNCKPB16/russian/MINSHIFT.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCKPB16/vietnamese/MINSHIFT.pdf) as well.

Consider a string **T**. A cyclic shift of the string **T** is a string **T'** obtained by moving an arbitrary (possibly, zero) number of **T**'s symbols from the beginning to the end. For example, the string **chef** is a cyclic shift of the string **hefc**, but the string **fehc** is not a cyclic shift of the string **chef**.

The minimal cyclic shift of a string is the lexicographically smallest cyclic shift. For example, the minimal cyclic shift of the string **hefc** is **chef**.

You are given a string **S**. The string **S** is generated **randomly**, i.e. any character of **S** is chosen randomly from the set of lowercase Latin letters, independently of other characters.

You are also given **Q** queries - one of the following forms:

- **0 J C**: make the **J**th character of **S** equal to **C**. **C** will be chosen randomly from the set of lowercase Latin letters.
- **1 L R P**: output the **P**th character of the minimal cyclic shift of the string obtained by taking a substring of **S** from the **L**th to the **R**th characters, inclusively.

Your task is to handle these queries efficiently.

### Input

There is a single test case per test file.

The first line of input contains randomly generated string **S**, consisting of lowercase Latin letters.

The second line contains a single integer **Q**, denoting the number of queries.

Each of the following **Q** lines describe a single query in one of the formats described above.

### Output

For each query of the type **1 L R P**, output a single line containing the **P**th character of the minimal cyclic shift of a substring of **S** starting at the **L**th character and ending at the **R**th character.

### Constraints

- **1** ≤ **|S|** ≤ **105**
- **1** ≤ **Q** ≤ **105**
- **1** ≤ **L** ≤ **R** ≤ **|S|**
- **1** ≤ **J** ≤ **|S|**
- **1** ≤ **P** ≤ **R - L + 1**
- **C** is a lowercase Latin letter, i.e. from 'a' to 'z'
- **S** consists of lowercase Latin letters

### Example

<pre><b>Input:</b>
<tt>codechef
5
0 6 q
1 5 7 1
1 3 8 3
0 5 m
1 2 8 7</tt>

<b>Output:</b>
<tt>c
e
o</tt>
</pre>
### Explanation

**Example case 1.** Let's perform all the queries one-by-one:

- Initially **S = "codechef"**.
- In the first query we change the **6**th letter of **S** to 'q', and it becomes equal to **codecqef**.
- In the second query, we're asked to find the **1**st letter of the smallest cyclic shift of the string **cqe**. The smallest cyclic shift is **cqe**, and its' first letter is **c**.
- In the third query, we're asked to find the **3**rd letter of the smallest cyclic shift of the string **decqef**. The smallest cyclic shift is **cqefde**, and its' third letter is **e**.
- In the fourth query we change the **5**th letter of **S**, and it becomes equal to **codemqef**.
- In the fifth query, we're asked to find the **7**th letter of the smallest cyclic shift of the string **odemqef**. The smallest cyclic shift is **demqefo**, and its' seventh letter is **o**.
