---
category_name: hard
problem_code: VOGOZO
problem_name: 'Vogon Zoo'
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
problem_author: yogesh01
problem_tester: null
date_added: 26-12-2014
tags:
    - yogesh01
time:
    view_start_date: 1422636277
    submit_start_date: 1422636277
    visible_start_date: 1422635400
    end_date: 1735669800
    current: 1493556895
layout: problem
---
All submissions for this problem are available. On the icy planet Zorg, the Vogons are putting together a zoo. One cage will house a collection of Kubudu dragons. Unlike the limited number of blood types found in other creatures, Kubudu dragons have a large variety of blood types. Each dragon’s blood type is ﬁxed when it is born and is given by a positive integer.

These blood types determine how the dragons interact with each other. Two dragons whose blood types are close to each other will quickly start ﬁghting and eventually destroy each other. At any given time, there is a threshold K such that it is safe to put two Kubudu dragons in the same cage only if their blood types diﬀer by K or more.

A batch of freshly hatched Kubudu dragons has arrived. Each dragon has had its blood tested and is tagged with its blood type. The Vogon zookeeper would like to determine the size of the largest collection of dragons from this batch that can safely be placed in a single cage. Given the dragons’ ﬁghting tendencies, this means that for each pair of dragons in the cage, their blood types should diﬀer by at least K.

For instance, suppose that K is 3 and there are 12 Kubudu dragons whose blood types are 1, 5, 6, 1, 8, 3, 12, 2, 13, 7, 9 and 11. From this batch, the maximum number of dragons that can be placed safely in the same cage is 4—for example, the dragons with blood types: 6, 12, 2 and 9.

You will be given the blood types of N Kubudu dragons and the threshold K. Your task is to compute the size of the largest group of dragons from this collection that can safely be placed in the same cage.

### Input

The ﬁrst line of input has two space separated integers N and K, where N is the number of Kubudu dragons and K is the threshold below which they ﬁght, as described above. The second line of input consists of N space separated integers, the blood types of the N dragons.

### Output

A single integer, the size of the largest collection of dragons that can be safely placed in the same cage.

**Test data**
 In all cases, 1 ≤ N ≤ 106. In 30% of the inputs, 1 ≤ N ≤ 5000. The blood types of the dragons lie in the range 1 to 107


Example

<pre> 
<b>Sample Input:</b> 
12 3 
1 5 6 1 8 3 12 2 13 7 9 11 

<b>Sample Output:</b>
 4<font face="sans-serif, Arial, Verdana, Trebuchet MS"><span style="white-space: normal;"> </span></font>
</pre>