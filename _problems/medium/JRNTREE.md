---
category_name: medium
problem_code: JRNTREE
problem_name: 'TreeLand Journey'
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
    - PYPY
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: xcwgf666
problem_tester: null
date_added: 3-07-2016
tags:
    - xcwgf666
time:
    view_start_date: 1468063200
    submit_start_date: 1468063200
    visible_start_date: 1468063200
    end_date: 1735669800
    current: 1493557702
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCKFL16/mandarin/JRNTREE.pdf), [Russian](http://www.codechef.com/download/translated/SNCKFL16/russian/JRNTREE.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCKFL16/vietnamese/JRNTREE.pdf) as well.

Sergey recently got back from his TreeLand journey.

As you might have probably guessed, TreeLand is a country located far to the east from ByteLand, the country he lives in. As you might have also probably guessed, it is called TreeLand, because historically the road system of the country forms a tree. So, there are **N** cities in the country and **N-1** bidirectional roads, connecting them. The cities are numbered from **1** to **N**. Of course, it is possible to get from any city of the country to any other city via these roads.

Not long ago, a new King came to the throne in TreeLand. The first thing he had done was re-organizing the road system of the country. It was considered that cities with more than **8** adjacent roads might cause disruption in the road system, because of the high traffic load. So now, every city in TreeLand is directly connected with no more than **8** cities.

Usually, when Sergey travels to the country, he visits all its cities. So now he visited all the **N** cities of TreeLand. Any time he _first_ visited a city, he wrote its number in his notebook. Eventually, there was a sequence of **N** integers in the notebook.

But what Sergey didn't know was that it was rainy season in TreeLand, and he was not prepared for it. Sadly, his notebook got wet, and the records became obscure.

Sergey wants to tell his friends about the journey, and so he wants to restore the order in which he visited the cities. He has partially restored his records: for some cities he is certain about when he visited them. He is also certain that he did not wander around wasting his time: he started from some city, visited all the cities and got back to the starting city, and did all this by travelling along the minimum possible number of roads (If he travelled along some road multiple times, it's counted multiple times).

Sergey found a map of the road system of TreeLand. After seeing it, he realized that generally there is more than one way to accomplish his trip. So now he is interested in the number of ways to complete the trip so that it doesn't contradict his records.

Please help him to calculate this number. Since it can be large, output it modulo **109+7**.

### Input

The first line of the input contains an integer **N** denoting the number of cities in TreeLand.

The second line contains **N** space-separated integer numbers. Let's denote the **i**th of them by **Ai**. If **Ai** is , then Sergey is not certain about the number of the city that was the **i**th in his records. Otherwise, **Ai** denotes the number of the **i**th city in Sergey's records.

Each of the following **N-1** lines contains two space-separated integers, **Xj Yj**, denoting a road in TreeLand.

### Output

Output the total number of possible trips Sergey could have done, which do not contradict the restored records. Since this number can be large, output it modulo **109+7**.

### Constraints

- **1** ≤ **N** ≤ **500**
- ≤ **Ai** ≤ **N**
- **1** ≤ **Xj**, **Yj** ≤ **N**
- Every city is directly connected with no more than **8** other cities.
- The road system forms a tree.
- There is at least **1** legal way to restore the trip.

### Example

<pre><b>Input:</b>
<tt>5
1 0 0 0 0
1 2
1 3
3 4
3 5</tt>

<b>Output:</b>
<tt>4</tt>

</pre>### Explanation
Sergey could have obtained the following sequences:

- 1 2 3 4 5: 1 -> 2 -> 1 -> 3 -> 4 -> 3 -> 5 -> 3 -> 1.
- 1 2 3 5 4: 1 -> 2 -> 1 -> 3 -> 5 -> 3 -> 4 -> 3 -> 1.
- 1 3 4 5 2: 1 -> 3 -> 4 -> 3 -> 5 -> 3 -> 1 -> 2 -> 1.
- 1 3 5 4 2: 1 -> 3 -> 5 -> 3 -> 4 -> 3 -> 1 -> 2 -> 1.

Here, all the trips have a length of **8** roads. No other trip has length less than or equal to **8** roads.
