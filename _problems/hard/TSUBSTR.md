---
category_name: hard
problem_code: TSUBSTR
problem_name: 'Substrings on a Tree'
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
max_timelimit: '4'
source_sizelimit: '50000'
problem_author: xcwgf666
problem_tester: laycurse
date_added: 1-03-2012
tags:
    - april12
    - hard
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/TSUBSTR'
time:
    view_start_date: 1334137553
    submit_start_date: 1334137553
    visible_start_date: 1334136600
    end_date: 1735669800
    current: 1493556881
layout: problem
---
All submissions for this problem are available.Chefland scientists have made a new invention! They developed a new way to represent a string with **N** symbols: consider a tree with **N** vertices, rooted at the first vertice. For each vertice, a single latin letter is written. So we have obtained a "**treestring**". The scientists haven't decided yet how the treestring should be pronounced, but they have invented a definition of a **substring for a treestring**. A string is a **substring of a treestring** if and only it can be obtained by moving from some vertice to its descendant and writing out all the letters from vertices that occured on this path in the order they have appeared. For example, consider the following treestring :



![](http://www.codechef.com/download/tsubstr.png)


The string "ba" is a **substring** of a given treestring because it can be obtained by moving from vertice **4** to vertice **6**, the string "abb" is also a substring of this treestring - it can be obtained by moving from the root to vertice **5**. However the string "cb" is **not a substring** of this treestring because there is no way from any vertice to its descendant in such a way that the sequence of letters is "cb".



Now the Chefland researchers ask you to help them with the treestring research.
They have given you a treestring with **N** vertices.
Please output the number of **distinct** substrings of a given treestring (including the empty one).
Then, **Q** queries will follow.
For the **i**-th query, the permutation **Pi** of **26** latin alphabet letters and an integer **Ki** will be given.
That means that if we sort all distinct substrings of the given treestring according to the **alphabetical order described in Pi**, you will have to output the **Ki**-th string.
"According to the alphabetical order described in **Pi**" means that letter **X** is lexicographically smaller that letter **Y** if and only **X** appears
in **Pi** earlier than **Y**. For example if the **alphabetical order** is "cbadefghijklmnopqrstuvwxyz", then letter "c" is **lexicographically smaller** than letter "a" because "c" is the first symbol of this permutation, and "a" is the third symbol of this permutation, therefore 1&lt;3 and for the given arrangement, "c" is **alphabetically less** than "a".
Here note that the string **A** is smaller than the string **B** (that means **A** comes earlier than **B**
after sorting) if and only if
**A** is a prefix of **B**,
or **Ai** = **Bi** (for all **i** &lt; **k**) and **Ak** &lt; **Bk** (in terms of alphabetical order)
where **Ai** denotes the **i**-th letter of **A**.

### Constraints

- 1&lt;=**N**&lt;=250000
- 1&lt;=**Q**&lt;=50000
- 1&lt;=**Ki**&lt;=9223372036854775807 (2^63-1)
- Output will not exceed 800 KB.
- It is guaranteed that the N lowercase latin letters have been generated randomly.

### Input

The first line of input consists of two integers - **N** and **Q**.
Then, a string composed of **N** lowercase latin letters follow.

Then, **N-1** lines follow. Each line is composed of **two** numbers - **Xi** and **Yi**. It means that there is an edge between vertice **Xi** and vertice **Yi**.

Then, **Q** lines follow. Each line consists of a permutation of **26** lowercase latin letters **Pi** and an integer **Ki**.

### Output

Output **Q+1** lines. On the first line output a single integer - the number of **distinct** substrings of a given treestring. The following **Q** lines should contain answers to the queries. **I**-th line should contain an answer to **i**-th query or a string **"-1"** if it is impossible
to find **Ki**-th string for **i**-th query.

### Example

<pre>
<b>Input:</b>
8 4
abcbbaca
1 2
2 3
1 4
4 5
4 6
4 7
1 8
abcdefghijklmnopqrstuvwxyz 5
abcdefghijklmnopqrstuvwxyz 1
bcadefghijklmnopqrstuvwxyz 5
abcdefghijklmnopqrstuvwxyz 100

<b>Output:</b>
12
aba

ba
-1
</pre>