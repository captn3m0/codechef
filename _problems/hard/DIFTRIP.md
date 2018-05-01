---
category_name: hard
problem_code: DIFTRIP
problem_name: 'Different Trips'
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
problem_author: tuananh93
problem_tester: laycurse
date_added: 25-09-2012
tags:
    - dec12
    - hard
    - suffix
    - tuananh93
editorial_url: 'http://discuss.codechef.com/problems/DIFTRIP'
time:
    view_start_date: 1355220982
    submit_start_date: 1355220982
    visible_start_date: 1355218200
    end_date: 1735669800
    current: 1493556966
layout: problem
---
All submissions for this problem are available.The Chef is enjoying a wonderful vacation in Byteland. What makes the Chef impressed the most is the road system of the country. Byteland has **N** cities numbered 1 through **N**. City 1 is the capital of Byteland. The country also has **N**-1 bidirectional roads connecting the cities. The **i**-th road connects two different cities **ui** and **vi**. In this road system, people can travel between every pair of different cities by going through exactly one path of roads.

The roads are arranged in such a way that people can distinguish two cities only when both cities have different number of roads connected to it. Such two cities will be considered _similar_. For example, city **A** is similar to the capital if the number of roads connected to city **A** is equal to the number of roads connected to the capital.

On each day during the vacation, the Chef wants to have a trip as follows. He chooses two cities **A** and **B** such that the Chef will visit city **B** if he goes from **A** to the capital using the shortest path. Then, the Chef will visit the cities on the shortest path from **A** to **B** through this path. Please note that **A** may be equal to **B**; that means the Chef will enjoy the day in a single city.

The Chef does not want to have _similar_ trips. Two trips are considered _similar_ if and only if
they both have the same number of visited cities and for each **i**, the **i**-th city visited in one trip is _similar_ to the **i**-th city visited in the other trip.

The Chef wants to have as many different, namely not _similar_, trips as possible. Help him count the maximum number of possible trips such that no two of them are similar.

### Input

The first line of the input contains a single integer **N**. The **i**-th line of next **N**-1 lines contains two space-separated integers **ui** and **vi**, denoting the **i**-th road.

### Output

Output a single line containing the maximum number of different trips.

### Constraints

1 ≤ **N** ≤ 100000 (105)
**ui** ≠ **vi**

Every pair of different cities can be traveled by going through exactly one path of roads.

### Sample

<pre>
<b>Input</b>:
3
2 1
3 1

<b>Output</b>:
3
</pre>### Explanation

In the sample, the country consists of three cities.
There are two roads. The first road connects city 1 and city 2.
The second road connects city 1 and city 3.
Each day, the Chef can choose the following possible trips:

- **A** = 1, **B** = 1
- **A** = 2, **B** = 2
- **A** = 3, **B** = 3
- **A** = 2, **B** = 1
- **A** = 3, **B** = 1

However, since the trip (**A** = 2, **B** = 2) is similar to the trip (**A** = 3, **B** = 3),
and the trip (**A** = 2, **B** = 1) is similar to the trip (**A** = 3, **B** = 1),
there are only three possible different trips for the Chef.
