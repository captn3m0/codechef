---
category_name: easy
problem_code: CHODE
problem_name: 'Chef and Codes'
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
problem_author: 'witalij_hq '
problem_tester: white_king
date_added: 6-10-2013
tags:
    - cakewalk
    - dec13
    - programming
    - witalij_hq
editorial_url: 'http://discuss.codechef.com/problems/CHODE'
time:
    view_start_date: 1387186200
    submit_start_date: 1387186200
    visible_start_date: 1387186200
    end_date: 1735669800
    current: 1493558127
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/DEC13/mandarin/CHODE.pdf) and [Russian](http://www.codechef.com/download/translated/DEC13/russian/CHODE.pdf).

Once upon a time chef decided to learn encodings. And, obviously, he started with the easiest one (well, actually the easiest after Caesar cypher) – substitution cypher.


But very soon Chef got bored with encoding/decoding, so he started thinking how to hack this cypher.
He already knows some algorithm, which is not always correct,
but it’s sufficient for now. Here is its description.

Imagine we know frequency sequence of English letters (this means, that letters are sorted by their frequency of appearing in English texts, in ascending order).
And let’s find frequency sequence of cyphered letters (if some of them appear equal number of times, then first in frequency sequence will be lower letter between them).
Now, using this two frequency sequences we can recover plain text. Just substitute cyphered letter with origin one, if they are at same positions in sequences.

Now, Chef has frequency sequence of English letters and cypher text. And he asks you to recover plain text. Please, help him.

### Input

In first line number **T** is given - number of test cases. Then **T** test cases follow. Each test case consists of two lines - frequency sequence and encrypted text.

### Output

For each test case you should output decrypted with the given frequency sequence text. Please note, that the case of letters should be preserved.

### Constraints

- **1** ≤ **T** ≤ **1000**;
- Length of frequency sequence is always 26;
- **1** ≤ length of the text ≤ **150000**;
- **1** ≤ sum lengths of all texts ≤ **150000**.
- Frequency sequence consists of all lowercase English letters. Text consists of any characters.

### Example

<pre>
<b>Input:</b>
3
qwrtyuipasdfgjkzxcvbnmheol
dummy!
bfgjklmopqrstuwxzhvnicdyea
abcd b efgd hbi!
qwrtyuipasdfgjkzxcvbnmheol
Dummy!

<b>Output:</b>
hello!
have a nice day!
Hello!

</pre>