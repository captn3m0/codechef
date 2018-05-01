---
category_name: hard
problem_code: QMARKS
problem_name: 'Lucy and Question Marks'
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
max_timelimit: '1 - 2'
source_sizelimit: '50000'
problem_author: xcwgf666
problem_tester: Rubanenko
date_added: 3-11-2013
tags:
    - aho
    - easy
    - ltime06
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/QMARKS'
time:
    view_start_date: 1385283988
    submit_start_date: 1385283988
    visible_start_date: 1385283988
    end_date: 1735669800
    current: 1493556801
layout: problem
---
All submissions for this problem are available.###  Read problems statements in Russian [here](http://www.codechef.com/download/translated/LTIME06/russian/QMARKS.pdf)

Long ago Lucy had written some sentences in her textbook. She had recently found those her notes. But because of the large amount of time that had passed, some letters became difficult to read. Her notes are given to you as a string with question marks in places of letters that are impossible to read.

Lucy remembers that those sentences definitely made some sense. So now she wants to restore them. She thinks that the best way to restore is to replace all the question marks by latin letters in such a way that the total sum of occurrences of all the strings from her dictionary in it is maximal. And it is normal if some word occurs in her dictionary two or more times. In this case you just have to count every word as much times as it occurs in the dictionary.

You will be given the string itself and the dictionary. Please output the maximal possible number of occurrences of dictionary words and lexicographically minimal string with this number of occurrences.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of every test case consists of two integers **N** and **M** - the length of the string, written by Lucy and the number of words in the dictionary. The second line of the test case consists of the string itself - **N** characters, each is either a question mark or a small latin letter.
Then, **M** lines follow. Each line consist of a single string of small latin letters - the word from the dictionary.

### Output

For each test case, output a two lines. The first line should contain the maximal number of occurrences. The second line should contain lexicographically minimal string with the maximal number of occurrences of the words from the dictionary.

### Example

<pre><b>Input:</b>
3
7 4
???????
ab
ba
aba
x
5 3
?ac??
bacd
cde
xa
8 2
?a?b?c?d
ecxd
zzz

<b>Output:</b>
9
abababa
2
bacde
1
aaabecxd
</pre>### Scoring

Subtask 1 (16 points): **T** = 50, 1 <= **N** <= 8, 1 <= **M** <= 10. Only the characters a, b and c and question marks occur in the string. Only the characters a, b, and c occur in the dictionary words. All the words in the dictionary consist of no more than 10 letters.

Subtask 2 (32 points): **T** = 50, 1 <= **N** <= 100, 1 <= **M** <= 100. Only the characters a, b and question marks occur in the string. Only the characters a and b occur in the dictionary words. All the words in the dictionary consist of no more than 10 letters.

Subtask 3 (52 points): **T** = 10, 1 <= **N** <= 1000, 1 <= **M** <= 1000. Total length of all the dictionary strings will not exceed 1000.

Time limit for the last subtask equals to 2 sec. For the first two subtasks it is 1 sec.
