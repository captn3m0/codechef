---
{"category_name":"easy","problem_code":"BEAUKONO","problem_name":"Beauty of Konoha","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin3","problem_tester":null,"date_added":"20-12-2018","tags":{"0":"admin3"},"time":{"view_start_date":1545503400,"submit_start_date":1545503400,"visible_start_date":1545503400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>Naruto has become the seventh Hokage of Konoha. He is now devoted to making Konoha a developed city. In order to do so, he is going to establish some city centers and connect them with roads.

A road between city centers $u$ and $v$ can be used to travel both from $u$ to $v$ and from $v$ to $u$. The **distance** between two city centers $u$ and $v$ is the minimum number of roads one needs to travel in order to reach from $u$ to $v$. A city center is called **remote** if it is an endpoint of exactly 1 or 0 roads. The **oddness** of a city center $u$ is the number of remote city centers which have odd distance from $u$. Naruto defines the **beauty** of Konoha as the maximum value of oddness among all existing city centers.

Initially, Konoha has only one city center (this city center has index 1) and no road. Naruto wants to do some operations. In each operation, he establishes a new city center and a road connecting this new city center with an existing city center. To know about the beauty of Konoha, Naruto has appointed you, the crazy genius programmer. Your job is to keep the record of the beauty of Konoha after **each** operation. After performing all the operations, Naruto calls you. He is too tired from all the work and only wants to know the **sum** of all the beauty values you have recorded. Can you answer him correctly?

###Input
- The first line of input is $T$ ($1 \leq T \leq 20$), the number of testcases. 
- Each testcase contains two lines.The first line of each testcase is $n$ ($1 \leq n \leq 200000$), the number of operations Naruto performs. 
- The second line of each testcase contains $n$ space separated integers, $i^{th}$ of which is $a_i$, which describes the $i^{th}$ operation performed by Naruto. This indicates that Naruto adds a new city center with index $i+1$ and a new road between city centers with indices $i+1$ and $a_i$.
- It is guaranteed that $1 \leq a_i \leq i$.

###Output
- For each testcase, output only one line, the answer to Naruto’s question.

###Sample Input
```
3
2
1 2
3
1 1 2
5
1 2 3 1 2
```

###Sample Output
```
3
4
8
```

###Explanation
**Testcase 1**: At first Konoha has only one citycenter, 1. After the first operation, the structure of Konoha looks like this:



![fig1](https://www.codechef.com/download/problems/BEAUKONO/8h5WQIF.png =100x75)


There are two remote citycenters: 1 and 2. Only 2 has odd distance from 1. So, oddness(1) = 1. Similiarly, oddness(2)=1. As both citycenter 1 and 2 have oddness 1, beauty after first operation is max(1,1)=1.

After second operation, the structure of Konoha looks like this:

![fig2](https://www.codechef.com/download/problems/BEAUKONO/36dgQQp.png =100x100)

There are two remote citycenters: 1 and 3.

From 1 or 3, no remote citycenter is at odd distance. But from 2, both 1 and 3 are at odd distance.

So, oddness(1)=0, oddness(2)=2 and oddness(3)=0.

So, beauty after second operation is max(0,2,0)=2.

The answer to Naruto’s question is: beauty after first operation + beauty after second operation = 3