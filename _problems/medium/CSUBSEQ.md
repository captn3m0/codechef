---
category_name: medium
problem_code: CSUBSEQ
problem_name: 'Chef and Chefness'
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
problem_author: mgch
problem_tester: wwwwodddd
date_added: 3-02-2018
tags:
    - cook91
    - dynamic
    - medium
    - mgch
editorial_url: 'https://discuss.codechef.com/problems/CSUBSEQ'
time:
    view_start_date: 1518978600
    submit_start_date: 1518978600
    visible_start_date: 1518978600
    end_date: 1735669800
    current: 1525198953
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/COOK91/mandarin/CSUBSEQ.pdf), [Russian](http://www.codechef.com/download/translated/COOK91/russian/CSUBSEQ.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK91/vietnamese/CSUBSEQ.pdf) as well.

Chef has a string **S** with length **N**. As Chef really likes his name, he defines the _chefness_ of a string as the number of ways to find the string "chef" as a subsequence in **S**; formally, it's the number of ways to choose four indices **i**, **j**, **k**, **l** such that **Si** = 'c', **Sj** = 'h', **Sk** = 'e', **Sl** = 'f' and 1 ≤ **i** ≤ **j** ≤ **k** ≤ **l** ≤ **N**. For example, the chefness of "chehefc" is 3 (with subsequences given by indices (1, 2, 3, 6), (1, 2, 5, 6), (1, 4, 5, 6)).

Chef perfectly understands that people really don't like strings with chefness greater than **K**. Therefore, he wants to erase a number of characters (possibly zero) from **S** in order to obtain a string with chefness **equal to K**. Help him compute the minimum number of characters he has to erase in order to achieve that!

### Input

- The first line of the input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first line of each test case contains two space-separated integers **N** and **K**.
- The second line contains a string **S** with length **N**.

### Output

For each test case, print a single line containing one integer — the minimum number of characters that need to be erased from **S** in order to obtain a string with chefness **K**, or -1 if it's impossible.

### Constraints

- 1 ≤ **K** ≤ 32
- each character in **S** is one of the letters 'c', 'h', 'e', 'f'
- 1 ≤ **N** ≤ 256
- 1 ≤ sum of **N** over all test cases ≤ 256

### Example

<pre><b>Input:</b>

5
7 3
chehefc
8 4
chehefch
19 24
ccccchhhhheeeeeffff
20 5
echhhfhfcecfhechfcch
99 27
ffhffhffcfechchccccfhhhfhhhhhhehhhehhhhheeeeefeeeeeeheeheeeeffcfffffffffffhffffchffeffcefefhhfcehfe

<b>Output:</b>

0
-1
9
3
9
</pre>### Explanation

**Example case 1:** The chefness of **S** is already equal to 3, hence it's enough to erase nothing.

**Example case 2:** Chefness is again equal to 3, but it's impossible to achieve chefness 4.

**Example case 3:** Chefness 24 can be achieved by erasing 4 letters 'c', 3 letters 'h' and 2 letters 'e'.
