---
category_name: medium
problem_code: TWTCLOSE
problem_name: 'Closing the Tweets'
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
problem_author: flying_ant
problem_tester: laycurse
date_added: 6-06-2012
tags:
    - array
    - cakewalk
    - cook23
    - flying_ant
editorial_url: 'http://discuss.codechef.com/problems/TWTCLOSE'
time:
    view_start_date: 1339959598
    submit_start_date: 1339959598
    visible_start_date: 1339959598
    end_date: 1735669800
    current: 1493557952
layout: problem
---
All submissions for this problem are available.Little kids, Jack and Evan like playing their favorite game Glass-and-Stone. Today they want to play something new and came across Twitter on their father's laptop.

They saw it for the first time but were already getting bored to see a bunch of sentences having at most 140 characters each. The only thing they liked to play with it is, closing and opening tweets.

There are **N** tweets on the page and each tweet can be opened by clicking on it, to see some statistics related to that tweet. Initially all the tweets are closed. Clicking on an open tweet closes it and clicking on a closed tweet opens it. There is also a button to close all the open tweets. Given a sequence of **K** clicks by Jack, Evan has to guess the total number of open tweets just after each click. Please help Evan in this game.

### Input

First line contains two integers **N K**, the number of tweets (numbered 1 to **N**) and the number of clicks respectively (1 ≤ **N**, **K** ≤ 1000). Each of the following **K** lines has one of the following.

- CLICK _X_ , where _X_ is the tweet number (1 ≤ _X_ ≤ N)
- CLOSEALL


### Output

Output **K** lines, where the _i_th line should contain the number of open tweets just after the _i_th click.

### Example

<pre>
<b>Input:</b>
3 6
CLICK 1
CLICK 2
CLICK 3
CLICK 2
CLOSEALL
CLICK 1

<b>Output:</b>
1
2
3
2
0
1

</pre>**Explanation:**

Let open\[x\] = 1 if the xth tweet is open and 0 if its closed.
Initially open\[1..3\] = { 0 , 0 , 0 }. Here is the state of open\[1..3\] after each click and corresponding count of open tweets.

CLICK 1 : { 1, 0, 0 }, open count = 1
CLICK 2 : { 1, 1, 0 }, open count = 2
CLICK 3 : { 1, 1, 1 }, open count = 3
CLICK 2 : { 1, 0, 1 }, open count = 2
CLOSEALL : { 0, 0, 0 }, open count = 0
CLICK 1 : { 1, 0, 0 }, open count = 1
