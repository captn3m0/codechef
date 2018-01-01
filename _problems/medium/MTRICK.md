---
category_name: medium
problem_code: MTRICK
problem_name: 'Magic Trick'
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
problem_author: yellow_agony
problem_tester: gerald
date_added: 18-02-2012
tags:
    - easy
    - jan14
    - programming
    - simple
    - yellow_agony
editorial_url: 'http://discuss.codechef.com/problems/MTRICK'
time:
    view_start_date: 1389605400
    submit_start_date: 1389605400
    visible_start_date: 1389605400
    end_date: 1735669800
    current: 1493557815
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JAN14/mandarin/MTRICK.pdf) and [Russian](http://www.codechef.com/download/translated/JAN14/russian/MTRICK.pdf).

Vidhi went to a magic show last week where she was astounded by a magic trick performed by the great Mandwarf, the brown. His trick was as follows :

- Ask a volunteer from the audience to write down a list **L** of **N** integers.
- Ask another volunteer from the audience to provide three integers **A**, **B**, **C**
- Ask another volunteer from the audience to provide **N** length string called **S** where each letter is either 'R', 'A' or 'M'
- Close his eyes for a split second and give the output of The Ancient Algorithm on this input.

We all know that The Ancient Algorithm is as follows : ```


for <b>i</b> from 1 to <b>N</b> do 

    if <b>i<sup>th</sup></b> letter of <b>S</b> is 'R'
        reverse <b>L</b>[<b>i</b>...<b>N</b>]
    else if <b>i<sup>th</sup></b> letter of <b>S</b> is 'A'
        add <b>A</b> to all numbers of <b>L</b>[<b>i</b>..<b>N</b>].
    else if <b>i<sup>th</sup></b> letter of <b>S</b> is 'M'
        multiply <b>B</b> to all numbers of <b>L</b>[<b>i</b>..<b>N</b>].

    for all number in <b>L</b>[<b>i</b>..<b>N</b>], module them by <b>C</b>.

    announce <b>L</b>[<b>i</b>] out loud

end


<pre>Vidhi's boyfriend got jealous when he saw her getting impressed by Mandwarf, the brown's wisdom. He wants to learn the trick to gain her undivided admiration. How about you help him?
### Constraints:

1 ≤ **T** ≤ 100 
1 ≤ **N** ≤ 1000
0 ≤ **L**\[**i**\] ≤ 1018
0 ≤ **A**,**B** ≤ 1018
2 ≤ **C** ≤ 1018

### Input

First line contains a single integer **T**, denoting the number of test cases. Then follow **T** test case scenarios. Each test case begins with an integer **N**, the size of the list **L**. Then in next line, you'd find **N** space separated integers - the list **L** itself. In next line, there'd be three space separated integers **A**, **B**, **C** followed by string **S** in the next line.

### Output

For each test case you've to output **N** space separated integers - the numbers announced by Mandwarf, the brown.

### Example

</pre>
<b>Input:</b>
2
3
1 1 1
2 3 1000
ARM
4
1 2 3 4
0 1 1000
AMAM

<b>Output:</b>
3 3 9
1 2 3 4

<pre>