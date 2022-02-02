---
{"category_name":"medium","problem_code":"DCRTIT","problem_name":"Decorate It","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3 5 2\r\n4 1 3 8\r\n7 2 1 13\r\n9 1 5 7\r\n8 5\r\n8 8\r\n5 7\r\n3 2\r\n2 6","output":"2\r\n5\r\n3\r\n-1\r\n7","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"kmaaszraa","problem_tester":null,"date_added":"20-12-2019","tags":{"0":"cook113","1":"data","2":"kmaaszraa","3":"kmaaszraa","4":"medium"},"problem_difficulty_level":"Medium-Hard","best_tag":"Medium Hard","editorial_url":"https://discuss.codechef.com/problems/DCRTIT","time":{"view_start_date":1577041202,"submit_start_date":1577041202,"visible_start_date":1577041202,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=DCRTIT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK113/hindi/DCRTIT.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK113/mandarin/DCRTIT.pdf), [Russian](https://www.codechef.com/download/translated/COOK113/russian/DCRTIT.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK113/vietnamese/DCRTIT.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK113/bengali/DCRTIT.pdf) as well.

Since it's almost Christmas, Dr.D wants to get in "That Christmas Feeling". As the first step, he's going to decorate his home. Since he's out of Christmas decorations, he must go buy some at the mall. There are exactly $K$ types of Christmas decorations and Dr.D wants to buy exactly one decoration of each type.

The mall can be viewed as a sequence of $N$ shops (numbered $1$ through $N$) in a straight line. For each valid $i$, the $i$-th shop is located at the point $P_i$, it sells only decorations of the type $D_i$ and it is only open in the time interval $[L_i, R_i]$. Dr.D wants to choose a point inside the mall, park his car there and start shopping for $K$ decorations. Since decorations are rather heavy, whenever Dr.D buys a decoration, he must load it into the car before buying another one. Shopping and moving around the mall (with or without decorations) does not take any time, but bringing heavy decorations back to the car still takes a lot of effort, so Dr.D would like to minimise the total distance he needs to walk with decorations.

You should answer $Q$ queries. In each query, you are given two integers $X$ and $T$ - Dr.D parks at the point $X$ in the mall at time $T$, and you should find the minimum distance Dr.D needs to walk with decorations. However, if it is impossible to buy one decoration of each type or if Dr.D would have to wait for some shops to open in order to do that, he will go back home and destroy Christmas. We know that Dr.D is extremely smart, so he will choose the shops to buy decorations from optimally.

### Input
- The first line of the input contains three space-separated integers $N$, $Q$ and $K$.
- $N$ lines follow. For each valid $i$ ($1 \le i \le N$), the $i$-th of these lines contains four space-separated integers $P_i$, $D_i$, $L_i$ and $R_i$.
- Each of the next $Q$ lines contains two space-separated integers $X$ and $T$ describing a query.

### Output
For each query, print a single line containing one integer - the minimum distance Dr.D needs to walk with decorations, or $-1$ if Dr.D destroys Christmas.

### Constraints 
- $1 \le N, Q \le 3 \cdot 10^5$
- $1 \le K \le N$
- $1 \le D_i \le K$ for each valid $i$
- $1 \le P_i \le 10^9$ for each valid $i$
- $1 \le L_i \le R_i \le 10^9$ for each valid $i$
- $1 \le X, T \le 10^9$

### Example Input
```
3 5 2
4 1 3 8
7 2 1 13
9 1 5 7
8 5
8 8
5 7
3 2
2 6
```

### Example Output
```
2
5
3
-1
7
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>