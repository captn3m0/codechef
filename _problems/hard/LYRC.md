---
category_name: hard
problem_code: LYRC
problem_name: 'Music & Lyrics'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: kaushik_iska
problem_tester: white_king
date_added: 3-06-2012
tags:
    - aho
    - aug13
    - dynamic
    - kaushik_iska
    - medium
    - string
editorial_url: 'http://discuss.codechef.com/problems/LYRC'
time:
    view_start_date: 1376299800
    submit_start_date: 1376299800
    visible_start_date: 1376299800
    end_date: 1735669800
    current: 1493556759
layout: problem
---
All submissions for this problem are available.Chef Sridhar listenes to music while cooking. He realized that the lyrics of many songs contain the same words. He thought of a task to do in his leisure; pick a set of words and find the frequency of the words in the lyrics of various songs.

A word A from the lyrics is said to match a given word W if W is a substring of A.

**Note** Some words from the lyrics can match multiple given words. For e.g, **shawty**, matches both **shawty** as well as **hawt**. The word **shawty** in the lyrics must be counted in the frquency of **shawty** as well as **hawt**.

You may assume that all the comparisons must be case sensitive. Also, there are no whitespaces within a word in the given list, or in the lyrics. Words in the lyrics are separated by **"-"** characters (of course without the quotes).

### Input

First line contains an integer **W**, denoting the number of words Chef has decided to find the frequencies of. Then follow **W** lines containing a word (**P**) each. The next line contains **N**, the number of lyrics Chef decided to index. Followed by **N** lines containing a string (**S**) which chef has to index. You can assume that **S** doesn't contain any **whitespace** characters.

### Output

The output contains **W** lines each denoting the frequency of the respective word in all of the lyrics together.

### Constraints

**1 ≤ W ≤ 500**
**1 ≤ |P| ≤ 5000**, where **|P|** denotes length of each word.
**1 ≤ N ≤ 100**
**1 ≤ |S| ≤ 50000**, where **|S|** denotes the length of lyric of each song.
All the characters will be either uppercase or lowercase english alphabets or numbers or **"-"**.

### Examples

<pre>
<b>Sample Input 1</b>
5
he
she
sher
his
hers
2
ushers
she-said-he-said-she-said-he-said-his

<b>Sample Output 1</b>
5
3
1
1
1


<b>Sample Input 2</b>
3
who
shawty
hawt
2
Get-it-shawty-Get-it-shawty
Whoa-W-W-Whoa-Shawtyyyyy

<b>Sample Output 2</b>
0
2
3


</pre>