---
category_name: easy
problem_code: MINSTR
problem_name: 'Minimize the string'
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
date_added: 7-12-2017
tags:
    - acm17chn
    - admin2
    - chn17rol
    - simple
editorial_url: 'https://discuss.codechef.com/problems/MINSTR'
time:
    view_start_date: 1515357000
    submit_start_date: 1515357000
    visible_start_date: 1515357000
    end_date: 1735669800
    current: 1525198937
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.You are given **n** strings **s1, s2, ..., sn**. Each of these strings consists only of letters 'a' and 'b', and the length of each string can be at most 2. In other words, the only allowed strings are "a", "b", "aa", "ab", "ba" and "bb".

Consider a permutation **p** = {**p1**, **p2**, ..., **pn**} of the integers {1, 2, ..., **n**}. Using this permutation, you can obtain a new string **S = sp1 + sp2 + ... + spn**, where the operator + denotes concatenation of strings.

You can shorten the string **S** by performing the following operation any number of times: choose two consecutive equal characters and remove one of these characters from the string. For example, the string "aabb" can be shortened to "abb" or "aab" in one operation, and then optionally it could still be shortened to "ab".

You are allowed to choose any permutation **p**. Take the string **S** obtained using this permutation, and using any sequence of operations, minimize the string length. Find the minimum possible length of the string obtainable.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains an integer **n**.

The second line of each test case contains **n** space-separated strings **s1, s2, ..., sn**.

### Output

For each test case, output a single line containing one integer corresponding to the minimum possible length of the shortened string.

### Constraints

- 1 ≤ **T** ≤ 105
- 1 ≤ **n** ≤ 105
- sum of **n** over all test cases won't exceed 106

### Example

<pre>
<b>Input</b>
2
2
ba ab
4
a b a b

<b>Output</b>
3
2
</pre>### Explanation

**Testcase 1:**

You can consider the permutation (2, 1). Using this, you get the string **S** = **sp1** + **sp2** = ab + ba = abba. You can then take the two adjacent b's and remove one of them to get aba, whose length is 3. You cannot do any better, and hence the answer is 3.

**Testcase 2:**

You can consider the permutation (1, 3, 2, 4). Using this, you get the string **S** = **sp1** + **sp3** + **sp2** + **sp4** = a + a + b + b = aabb. You can then take the two adjacent b's and remove one of them to get aab. Then you can take the two adjacent a's and remove one of them to get ab. We end up with a length of 2, and you cannot do any better. Hence the answer is 2.
