---
category_name: medium
problem_code: CARLOS
problem_name: 'Inversion sorting'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: xellos0
problem_tester: xcwgf666
date_added: 25-01-2015
tags:
    - april15
    - dynamic
    - easy
    - prefix
    - xellos0
editorial_url: 'http://discuss.codechef.com/problems/CARLOS'
time:
    view_start_date: 1428917400
    submit_start_date: 1428917400
    visible_start_date: 1428917400
    end_date: 1735669800
    current: 1493557506
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/APRIL15/mandarin/CARLOS.pdf) and [Russian](http://www.codechef.com/download/translated/APRIL15/russian/CARLOS.pdf).

The Aa'ugld alphabet consists of **M** letters, which we'll denote by integers from **1** to **M** in alphabetical order - the smaller number a letter has, the earlier it appears in the alphabet. Since the author of this alphabet wasn't very creative, many letters can be transformed to other ones using some simple operations, which we'll call "inversions".

You're given a list of possible operations. The list isn't exhaustive, since any two inversions can be combined to produce a new inversion. Specifically, if there is an inversion that transforms a letter **x** to a letter **y** and an inversion that transforms the letter **y** to a letter **z**, you may assume that there's also an inversion that transforms the letter **x** to the letter **z**. In short, "inversion" operations are transitive.

Combining any inversion with itself produces identity - an operation that transforms any letter to itself. (That's where the name "inversion" comes from - an operation that's its own inverse.) Therefore, if there's an inversion that transforms a letter **x** to a letter **y**, then there's also an inversion that transforms the letter **y** to the letter **x**.

There's a long word **W** with **N** letters. You should transform some of these letters to other ones in order to make the letters of **W** sorted in alphabetical order. Is it possible at all? If it is, what's the minimum number of letters that should be transformed?

### Input

- The first line of the input contains an integer **T** - the number of test cases.
- The first line of each test case contains three integers **M**, **K** and **N**.
- The following **K** lines each contain two integers **x** and **y**, denoting an inversion that transforms letter **x** to letter **y**.
- The last line of each test case contains **N** integers **ai** - letters of the word **W**.

### Output

For each test case, output a single line containing **-1** if it's impossible to make the letters of **W** sorted in alphabetical order. Otherwise, output the smallest number of letters that need to be transformed to achieve that.

### Constraints

- **1** ≤ **T** ≤ **10**
- **1** ≤ **N** ≤ **200000**
- ≤ **K** ≤ **M(M-1)/2**
- **1** ≤ **x,y** ≤ **M**
- all unordered pairs **(x,y)** will be distinct
- **1** ≤ **ai** ≤ **M**

Subtask 1 (18 points):

- **1 ≤ M ≤ 10**
- **1 ≤ N ≤ 20**

Subtask 2 (60 points):

- **1 ≤ M ≤ 50**
- **1 ≤ N ≤ 20000**

Subtask 3 (22 points):

- **1 ≤ M ≤ 200**
- **1 ≤ N ≤ 200000**

### Example

<pre><b>Input:</b>
2
3 3 3
1 2
2 3
3 1
3 2 1
3 1 2
2 3
2 1
<b>Output:</b>
2
-1

</pre>### Explanation
**Example case 1.** It's possible to transform the first letter to 1 and the last letter to 2. The resulting word has letters 1 2 2.

**Example case 2.** This word can only be transformed to 2 1 or 3 1.
