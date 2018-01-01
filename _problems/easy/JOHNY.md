---
category_name: easy
problem_code: JOHNY
problem_name: 'Uncle Johny'
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
problem_author: kostya_by
problem_tester: null
date_added: 3-10-2013
tags:
    - cakewalk
    - kostya_by
    - nov13
editorial_url: 'http://discuss.codechef.com/problems/JOHNY'
time:
    view_start_date: 1384162200
    submit_start_date: 1384162200
    visible_start_date: 1384162200
    end_date: 1735669800
    current: 1493558154
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/NOV13/mandarin/JOHNY.pdf) and [Russian](http://www.codechef.com/download/translated/NOV13/russian/JOHNY.PDF).

Vlad enjoys listening to music. He lives in Sam's Town. A few days ago he had a birthday, so his parents gave him a gift: MP3-player! Vlad was the happiest man in the world! Now he can listen his favorite songs whenever he wants!

Vlad built up his own playlist. The playlist consists of **N** songs, each has a **unique** positive integer length. Vlad likes all the songs from his playlist, but there is a song, which he likes more than the others. It's named "Uncle Johny".

After creation of the playlist, Vlad decided to sort the songs in increasing order of their lengths. For example, if the lengths of the songs in playlist was {1, 3, 5, 2, 4} after sorting it becomes {1, 2, 3, 4, 5}. Before the sorting, "Uncle Johny" was on **K**-th position (1-indexing is assumed for the playlist) in the playlist.

Vlad needs your help! He gives you all the information of his playlist. Your task is to find the position of "Uncle Johny" in the sorted playlist.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.  The first line of each test case contains one integer **N** denoting the number of songs in Vlad's playlist. The second line contains **N** space-separated integers **A1**, **A2**, ..., **AN** denoting the lenghts of Vlad's songs. The third line contains the only integer **K** - the position of "Uncle Johny" in the initial playlist. ### Output

For each test case, output a single line containing the position of "Uncle Johny" in the sorted playlist. ### Constraints

1 ≤ **T** ≤ 1000 1 ≤ **K** ≤ **N** ≤ 100 1 ≤ **Ai** ≤ 109### Example

<pre><b>Input:</b>
3
4
1 3 4 2
2
5
1 2 3 9 4
5
5
1 2 3 9 4 
1

<b>Output:</b>
3
4
1

</pre>### Explanation
In the example test there are **T**=3 test cases.

**Test case 1**

In the first test case **N** equals to 4, **K** equals to 2, **A** equals to {1, 3, 4, 2}. The answer is **3**, because {1, 3, 4, 2} -> {1, 2, 3, 4}. **A2** now is on the **3**-rd position.

**Test case 2**

In the second test case **N** equals to 5, **K** equals to 5, **A** equals to {1, 2, 3, 9, 4}. The answer is **4**, because {1, 2, 3, 9, 4} -> {1, 2, 3, 4, 9}. **A5** now is on the **4**-th position.

**Test case 3**

In the third test case **N** equals to 5, **K** equals to 1, **A** equals to {1, 2, 3, 9, 4}. The answer is **1**, because {1, 2, 3, 9, 4} -> {1, 2, 3, 4, 9}. **A1** stays on the **1**-th position.

### Note

["Uncle Johny"](http://www.last.fm/music/The+Killers/_/Uncle+Johny) is a real song performed by The Killers.
