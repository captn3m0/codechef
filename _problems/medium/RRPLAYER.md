---
category_name: medium
problem_code: RRPLAYER
problem_name: Player
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
problem_author: Rubanenko
problem_tester: tuananh93
date_added: 8-10-2014
tags:
    - Rubanenko
    - cook53
    - dynamic
    - easy
    - probability
editorial_url: 'http://discuss.codechef.com/problems/RRPLAYER'
time:
    view_start_date: 1419186837
    submit_start_date: 1419186837
    visible_start_date: 1419186758
    end_date: 1735669800
    current: 1493557891
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK53/mandarin/RRPLAYER.pdf) and [Russian](http://www.codechef.com/download/translated/COOK53/russian/RRPLAYER.pdf) as well.

Petr, Nikita G. and Nikita are the most influential music critics in Saint-Petersburg. They have recently downloaded their favorite band's new album and going to listen to it. Nikita claims that the songs of entire album should be listened strictly in the same order as they are given, because there is the secret message from the author in the songs' order. Petr, being chaotic, does not think so, hence he loves listening to songs in a random order. Petr is pretty good in convincing other people, so after a two-hours discussion Nikita accepted listening in random order(the discussion's duration was like three times longer thatn the album's one). In this context random order means following: There are **N** songs in the album. In the very beginning random song is chosen(here and further "random song" means that every song has equal probability to be chosen). After some song is over the next one is chosen randomly and independently of what have been played before. 

Nikita G., being the only one who is not going to drop out from the university, wonders, what is the expected number of songs guys have to listen to until every song is played at least once. />

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows. 

The first and only line of each test case contains a single integer **N** denoting the number of songs in the album. />

### Output

For each test case, output a single line containing the expected number of songs the guys will listen to. Your answer will be considered as correct if it has an absolute or relative error less than **10−1**. More formally if the expected output is **A** and your output is **B**, your output will be considered as correct if and only if
**|A − B| ≤ 10−1 \* max{|A|, |B|, 1}**. />

### Constraints

9. **1** ≤ **T** ≤  **100**
10. **1** ≤ **N** ≤  **3000**
### Example

```
<b>Input:</b>
3
1
2
3


<b>Output:</b>
1.0
3.0
5.5



```
### Explanation

**Example case 2** After playing the first song there is **1/2** chance to finish the album each time new song is played. So the expected number of songs is **2/2 + 3/4 + 4/8... = 3**