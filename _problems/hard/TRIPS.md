---
category_name: hard
problem_code: TRIPS
problem_name: 'Children Trips'
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
max_timelimit: '8'
source_sizelimit: '50000'
problem_author: xcwgf666
problem_tester: shangjingbo
date_added: 4-08-2014
tags:
    - lca
    - medium
    - oct14
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/TRIPS'
time:
    view_start_date: 1413192600
    submit_start_date: 1413192600
    visible_start_date: 1413192600
    end_date: 1735669800
    current: 1493557001
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/OCT14/mandarin/TRIPS.pdf) and [Russian](http://www.codechef.com/download/translated/OCT14/russian/TRIPS.pdf).

There's a new trend among Bytelandian schools. The "Byteland Touristic Bureau" has developed a new project for the high-schoolers. The project is so-called "Children's Trips".

The project itself is very simple: there are some touristic routes in Byteland, and **N** touristic campuses (numbered from **1** to **N**). For the sake of economy, there are exactly **N-1** road between them. Of course, even having this given, it is possible to travel from any touristic campus to any other one. Moreover, for the sake of safety, each road is no longer than **2** kilometers.

When some student wants to travel, he first chooses his starting campus - he is been delivered there (say) by a helicopter. He chooses his final destination campus as well. From his final destination, he will be transported to his home by (say) a helicopter, again. So that pupil won't travel any extra distance by foot. When the start and the finish are chosen and the pupil is delivered, he starts his moving by the only route. None of pupils is infinitely strong, so first the pupil looks at the map of the touristic routes, and then he chooses the furthest campus on his way that he can reach during the current day (by safety regulations, it is strictly prohibited to sleep not at the campus because there can be a little trouble with werewolves), and moves there. Then the new day begins, and it repeats till the moment when the destination is reached.

Of course, not all the students created equal. Somebody is good in math, somebody in English, somebody in PE. So it's quite natural that all high-schoolers has different strengths.
We call the strength is the maximal number of kilometers that the pupil can pass in a day. And now you're given a lot of queries from the children. For every query, you are given the starting campus, the final campus and the strength. You are requested to calculate the number of days for every trip. The map of the campuses and the distances between them will be given to you as well.

### Input

The first line of input contains the integer **N**, denoting the number of campuses.

The next **N-1** lines contain triples of the form **X Y D** with the meaning that there is a road between the **X**-th and the **Y**-th campus with the length **D** kilometers.

Then there is a line with a single integer **M**, denoting the number of queries.

Then, there are **M** lines with the triples of the form **S F P** with the meaning that the trip starts at the campus **S**, ends at the campus **F** and the student has the strength of **P**.

### Output

For every query, please output the number of days on a separate line.

### Constraints

- **1** ≤ **N, M** ≤ **100000**
- **1** ≤ **X, Y, S, F** ≤ **N**
- **1** ≤ **D** ≤ **2**
- **2** ≤ **P** ≤ **2\*N**

### Example

<pre><b>Input:</b>
5
1 2 1
2 3 2 
1 4 2
4 5 1
5
1 5 3
1 3 2
2 5 4
1 2 10
4 5 2

<b>Output:</b>
1
2
1
1
1
</pre>