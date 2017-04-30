---
category_name: hard
problem_code: IMPROVE
problem_name: 'Improve the Permutation'
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
problem_tester: errichto
date_added: 13-01-2017
tags:
    - ltime44
    - medium
    - permutation
    - xcwgf666
editorial_url: 'https://discuss.codechef.com/problems/IMPROVE'
time:
    view_start_date: 1485622800
    submit_start_date: 1485622800
    visible_start_date: 1485622800
    end_date: 1735669800
    current: 1493556731
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME44/mandarin/IMPROVE.pdf), [Russian](http://www.codechef.com/download/translated/LTIME44/russian/IMPROVE.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME44/vietnamese/IMPROVE.pdf) as well.

Sergey thinks that some permutations are better than other permutations. He thinks that the permutations with the smaller number of inversions are nicer than the ones with the bigger number of inversions. So the smaller the number of inversions is, the nicer is the permutation.

Sergey has a permutation **A** which he wants to make as nice as possible. This is kind of special permutation, because initially it doesn't have any index **i** such that **Ai** = **i** (Assume 1-based indexing). For making it nicer, he can swap two **adjacent** numbers in this permutation, but only if both of them are not on their places (i.e. if you swap **Ai** and **Ai+1**, then **Ai ≠ i** and **Ai+1 ≠ i+1** should be held). He wants to perform such operation multiple times to make the number of inversions in the permutation as small as possible.

Making the permutation the nicest of the possible ones has turned out to be a complicated problem, so Sergey asks you to help him and to provide _any_ sequence of the allowed swaps that would lead him to obtaining the nicest permutation. Since Sergey is quite eager to see the way to improve his permutation, he wants the sequence to be not longer than **2 × N2**. It can be proved that such sequence can be found under this restriction.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains a single integer **N** denoting the amount of numbers in the permutation.

The second line contains **N** space-separated integers **A1**, **A2**, ..., **AN** denoting the permutation itself.

### Output

For each test case, output an answer in the following format:

- The first line should contain a single integer **C** denoting the number of swap operations.
- On the following line, output **C** space-separated integers **Dj** denoting the swap of the **Dj**th and the (**Dj+1)**th number in the permutation (1-indexed).

The restrictions for the output sequence are:

- **1** ≤ **C** ≤ **2 × N2**
- **1** ≤ **Dj** N

### Constraints

- **A** is a permutation.
- **1** ≤ **Ai** ≤ **N**
- **Ai** ≠ **i**

### Subtasks

- **Subtask #1 (23 points)**: **1** ≤ **T** ≤ **10**, **1** ≤ **N** ≤ **5**
- **Subtask #2 (77 points)**: **1** ≤ **T** ≤ **50**, **1** ≤ **N** ≤ **50**

### Example

```
<b>Input:</b>
<tt>1
4
4 3 2 1</tt>

<b>Output:</b>
<tt>6
1 3 2 3 1 2</tt>

```
### Explanation

**Example case 1.** Let's perform these operations one-by-one. The positions having **Ai = i** will be highlighted in bold:

- Initially we have A = (4, 3, 2, 1)
- Then we swap **A1** with **A2**, obtaining A = (3, 4, 2, 1)
- Then we swap **A3** with **A4**, obtaining A = (3, 4, 1, 2)
- Then we swap **A2** with **A3**, obtaining A = (3, 1, 4, 2)
- Then we swap **A3** with **A4**, obtaining A = (3, 1, 2, **4**)
- Then we swap **A1** with **A2**, obtaining A = (**1**, 3, 2, **4**)
- Finally we swap **A2** with **A3**, obtaining A = (**1**, **2**, **3**, **4**)

This way we've obtained the permutation with zero inversions. Obviously, this is the nicest possible permutation in this test case.