---
category_name: medium
problem_code: MLCHEF
problem_name: 'Merciless Chef'
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
problem_author: adurysk
problem_tester: xcwgf666
date_added: 22-01-2013
tags:
    - adurysk
    - data
    - medium
    - segment
    - sept13
editorial_url: 'http://discuss.codechef.com/problems/MLCHEF'
time:
    view_start_date: 1379323983
    submit_start_date: 1379323983
    visible_start_date: 1379323800
    end_date: 1735669800
    current: 1493557800
layout: problem
---
All submissions for this problem are available.These days Chief Chef is becoming more and more merciless. His mind is becoming full of cruel intentions. Today he has decided to slowly poison and kill some of the staff members of his kitchen. Yeah, he is bored with them. There are **N** Chefs in the kitchen besides the Chief Chef. Every Chef in the kitchen has an index.

The index of the Chief Chef is 0. Remaining **N** chefs have indices between **1** and **N** and no two chefs have the same index. As any other kitchen in the street, every chef has exactly one Immediate-Superior and can have any number of Superiors above him. A chef (say **A**) is Superior of another chef (say **B**) if either **A** is the Immediate-Superior of **B** or **A** is the Superior of Immediate-Superior of **B**. The Chief Chef is on the top position and Superior to all **N** chefs and has no Superior above him.

If **A** is Immediate-Superior of **B**, then **B** is called Immediate-Inferior of **A**. If **A** is Superior of **B** then **B** is called Inferior of **A** (See the example for better explanation).

Every chef makes exactly one dish daily. There is a small custom in the kitchen that every day each chef should taste the dishes made by all his superiors on that day. So if our Chief Chef swaps the dish made by Chef **A** with a poisonous one, every Inferior of **A** will taste this dish on that day and get poisoned. Every poisonous dish has some specific sickness value **X** and the health of every chef poisoned by it decreases by **X** on that day. As soon as the health of a chef drops to zero or less, he dies.

When a chef dies in the kitchen, Chief Chef recruits a new chef to replace the dead chef, so the Immediate Superior and all the Immediate Inferiors of the dead chef will become the Immediate Superior and Immediate Inferiors of the new chef respectively. The newly recruited chefs are very healthy. In fact, you can assume that they have infinite health.

Chef has made some poison recipes and has some queries for you. He asks you one query per day for **Q** continuous days. He has two types of queries: 
1\) He gives you two integers **A** and **X** which means that he wants to make the dish made by **A** poisonous on that day with a poison of sickness value **X**. 
2\) He gives you one integer **A**. In this type of query he wants to know how many chefs among the inferiors of **A** are old chefs, i.e, not newly recruited chefs.

Remember that chef can also poison the dish made by himself, which will be tasted by all **N** chefs.

### Input

The first line contains an integer **N**.
The next **N** lines have two integers each. The first integer on the **i**-th line is the health and the second integer is the index of the immediate superior of chef with index **i**.
The index of immediate superior of the chef is strictly less than the index of the chef.
The next line contains an integer **Q**.
The next **Q** lines contain one query each. Each query starts with an integer which represents the type of query. If it is **1**, then it is of the first type and is followed by two space separated integers **A** and **X** (in this order). If it is **2**, it is of the second type and is followed by one integer **A**. 
The meanings of variables are well explained in the statement.

### Output

For each query of the second type, print one integer as asked in the question.

### Constraints

1 &lt;= **N** &lt;= 105
1 &lt;= **Q** &lt;= 105
0 &lt;= **A** &lt;= **N**
1 &lt;= **H** &lt;= 109
1 &lt;= **X** &lt;= 104

### Example

<pre>
<b>Sample Input</b>
4
1 0
2 0
2 2
1 2
4
1 2 1
2 2
1 0 1
2 0

<b>Sample Output</b>
1
1
</pre>
### Example explanation

In this sample, chef-**1** and chef-**2** have Chief Chef(chef-0) as immediate superior and chef-**3** and chef-**4** have chef-**2** as immediate-superior.

Immediate inferiors of the chefs are :

chef-0 -&gt; chef-**1** and chef-**2**
chef-**1** -&gt; *None*
chef-**2** -&gt; chef-**3** and chef-**4**
chef-**3** -&gt; *None*
chef-**4** -&gt; *None*

Inferior chefs of the respective chefs are :

chef-0 -&gt; chef-**1**,chef-**2**,chef-**3**,chef-**4**
chef-**1** -&gt; *None*
chef-**2** -&gt; chef-**3**, chef-**4**
chef-**3** -&gt; *None*
chef-**4** -&gt; *None*

Initially the healths of these **4** chefs are (**1**, **2**, **2**, **1**).

On the *first* day Chief Chef poisons the dish of chef-**2**, which will be tasted by his inferiors 
 (chef-**3**, chef-**4**), with a poison of sickness value **1**. So after that the healths of these chefs become (**1**, **2**, **1**, 0).
As the **4**-th chef's health dropped to *zero*, he dies on this day. He will be replaced by a new chef with INF (infinite) health.

Healths of Chefs after Day-1 = (1,2,1,INF).

On the *second* day Chief-Chef asked you the second type query to give the number of old chefs among the inferiors of chef-**2**. As one inferior of chef-**2** died on first day, only one inferior chef of chef-**2**
is old chef, and output is **1**.

Healths of Chefs after Day-2 = (1,2,1,INF).

On the *third* day Chief Chef poisons the dish of chef-0(i.e, his dish) with poison sickness **1**, and it is tasted by everyone and poisons all the **4** other chefs, so after that the healths of these chefs
 become (0, **1**, 0, **INF**). As the **1**-st and the **3**-rd chefs' health dropped to *zero*, they die on this day and are replaced by two new chefs with INF(infinite) health.

The health of Chefs after Day-3 is (INF,1,INF,INF).

On the *fourth* day Chief Chef asked you the second type query to give the number of old chefs among the inferiors of chef-0(Chief Chef himself). As only chef-**2** is an old chef, output is **1**.

Healths of Chefs after Day-4 = (INF,1,INF,INF).
