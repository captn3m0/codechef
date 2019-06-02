---
category_name: medium
problem_code: CHEFPASS
problem_name: 'Codechef Password Recovery'
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
problem_author: gamabunta
problem_tester: null
date_added: 6-08-2012
tags:
    - cook25
    - euler
    - gamabunta
    - graph
time:
    view_start_date: 1345403888
    submit_start_date: 1345403888
    visible_start_date: 1345402200
    end_date: 1735669800
    current: 1493557914
layout: problem
---
All submissions for this problem are available.Chef recently decided a very curious encryption algorithm for CodeChef passwords. He took an N-letter password and found all the possible
2-letter substrings, considering the characters of a password was written in a circle. Thus, for AbcD, he would deduce the following
substrings: Ab, bc, cD, DA.

Then, some of the substrings were reversed. For example, the set of substrings above could be converted to Ab, cb, Dc, DA. All
the substrings were then stored in a database. Whenever the need be, the substrings were recovered, and a password was generated. Of course
sometimes, more than one such password could be generated, but Chef thinks this is perfectly fine!

Unfortunately, a programming error by the new CodeChef minion, led to corruption of this database and mixed all the strings together.
Chef now wants to retrieve the passwords, a few at a time. He gives you a set of substrings A from some of the passwords - these you
should always consider, and another set of substrings B from which you can use some. Can you tell him if it is possible to select all the substrings
from A and some (0 or more) substrings from B and construct 1 or more passwords? Each selected string can be used only once, for at max 1
password. See explanation of Sample Input for clarification.

### Input

The first Line contains a single number T, the number of test cases.

Each test case contains 2 lines.
The first line of the test case contains the number N (= |A|), followed by the N substrings Chef gives in A. The next line contains
M (= |B|), followed by M substrings. Two substrings are input with a single space character between them.

### Output

Print T lines, one for each test case. Output either "YES" if it is possible to select all strings from A and some strings from B
such that the overall set of strings represent the substrings for 1 or more passwords. Output "NO" otherwise.

### Constraints

<pre>1 ≤ T ≤ 100
1 ≤ N ≤ 1000
1 ≤ M ≤ 1000
All characters would be upper case or lower case English letters. Passwords are case sensitive.
</pre>
### Sample Input

<pre>2
4 aB aB Ca Bc
6 aB Ca ca ab ba bc
4 aB aB Ca Bc
3 Ba aC bc
</pre>
### Sample Output

<pre>YES
NO
</pre>
### Explanation

In the first Sample Input, you can construct "aBaC" from (**aB** **aB** **Ca** Ca) and
"aBc" from (**Bc** aB ca). Strings selected from A are shown in bold. Remember that substrings can be reversed. Note
that although there are repeated strings, each string is used in at most one of the passwords.
