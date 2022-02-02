---
{"category_name":"medium","problem_code":"DRGNDEN","problem_name":"Chef and Dragon Dens","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"5 4\r\n3 1 4 1 5\r\n1 2 4 8 16\r\n2 5 2\r\n1 3 5\r\n2 3 4\r\n2 1 4","output":"22\r\n13\r\n-1","explanation":"Here is an illustration of the mountain range described in the first sample test case.\r\n\r\n![fig1](https://codechef_shared.s3.amazonaws.com/download/Images/JULY20/DRGNDEN/picture.png)\r\n\r\n- Query 1: Starting at $p_5$ (height $5$), Chef can glide to $p_3$ (height 4) and then to $p_2$ (height $1$). The total tastiness of this journey is $a_5+a_3+a_2=16+4+2=22$.\r\n\r\n![fig2](https://codechef_shared.s3.amazonaws.com/download/Images/JULY20/DRGNDEN/picture1.png) \r\n\r\n- Query 2: The value of $a_3$ is set to $5$.\r\n- Query 3: Chef glides from $p_3$ to $p_4$. The tastiness is $a_3+a_4=5+8=13$.\r\n- Query 4: It is impossible to get from $p_1$ to $p_4$. Even if $h_1 \\gt h_4$, to reach $p_4$, Chef would need to fly either upwards or through the mountain, both of which are impossible.\r\n\r\n![fig3](https://codechef_shared.s3.amazonaws.com/download/Images/JULY20/DRGNDEN/picture3.png)\r\n\r\n![fig4](https://codechef_shared.s3.amazonaws.com/download/Images/JULY20/DRGNDEN/unnamed.png)","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"shisuko","problem_tester":"","date_added":"23-03-2020","tags":{"0":"data","1":"greedy","2":"july20","3":"medium","4":"segment","5":"shisuko","6":"shisuko","7":"stack","8":"trees"},"problem_difficulty_level":"Medium","best_tag":"Segment Tree","editorial_url":"https://discuss.codechef.com/problems/DRGNDEN","time":{"view_start_date":1594632600,"submit_start_date":1594632600,"visible_start_date":1594632600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=DRGNDEN","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JULY20/hindi/DRGNDEN.pdf), [Bengali](https://www.codechef.com/download/translated/JULY20/bengali/DRGNDEN.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JULY20/mandarin/DRGNDEN.pdf), [Russian](https://www.codechef.com/download/translated/JULY20/russian/DRGNDEN.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JULY20/vietnamese/DRGNDEN.pdf) as well.

Chef is on an adventure to find the tastiest exotic spices. Everyone knows that the best spices are guarded by several ancient dragons that dwell within mountains.

The mountain range can be modeled by a polyline in the 2D $xz$ plane that passes through $N$ points $p_1 = (1,h_1), p_2 = (2, h_2), \ldots, p_N = (N, h_N)$, in this order, where $h_i$ is a positive integer for each valid $i$. This polyline divides the set of points $\{(x, z): 1 \le x \le N\}$ into two regions. The "solid" part of the mountain range is the "bottom" region, i.e. the region that contains the $x$-axis (the x-axis is the line $z=0$).

A dragon's den is located at each of the $N$ points. For each valid $i$, the den at the point $p_i$ initially contains a pile of spices with tastiness $a_i$. With a technique he learned from dragons, Chef can glide from den to den, tasting all of the spices along the way. The tastiness of an entire journey is the summed up tastiness of spices over all dens visited during the journey. However, there are some restrictions:
- Chef can only glide from a higher den to a strictly lower den, i.e. if he glides from a den at $p_i$ to a den at $p_j$, then $h_i \gt h_j$ must hold.
- Chef can only glide in one direction and never look back, i.e. if he starts travelling in the direction of decreasing $x$, he must keep travelling in that direction until the end of the journey, and if he starts travelling in the direction of increasing $x$, he must keep travelling in that direction until the end of the journey too.
- Chef cannot travel through solid mountain, i.e. he can only glide from a den at $p_i$ to a den at $p_j$ if the line segment connecting the points $p_i$ and $p_j$ does not intersect the "solid" part of the mountain range. However, it may touch the border of the mountain range, i.e. the polyline itself.

Note that gliding is the **only** way for Chef to travel between dens.  It is valid for a journey to begin and end at the same den, in which case Chef tastes the spices at the den and nothing else.

See the explanation of the sample test case for a concrete example.

With that in mind, Chef needs you to process $Q$ queries. There are two types of queries:
- `1 b k`: Chef changes his mind and decides that the tastiness of the spices in the den at the point $p_b$ should be changed to $k$ instead.
- `2 b c`: Chef wants to start a journey at the den located at $p_b$ and end it at the den located at $p_c$. Find the maximum possible tastiness of such a journey or determine that no such journey exists. 

### Input
- The first line of the input contains two space-separated integers $N$ and $Q$.
- The second line contains $N$ space-separated integers $h_1, h_2, \ldots, h_N$.
- The third line contains $N$ space-separated integers $a_1, a_2, \ldots, a_N$.
- Then, $Q$ lines follow. Each of these lines contains three space-separated integers describing a query in the above format.

### Output
For each query of the second type, print a single line containing one integer ― the maximum tastiness of a journey or $-1$ if no valid journey exists.

### Constraints
- $1 \le N,Q \le 2 \cdot 10^5$
- $1 \le h_i \le 10^9$ for each valid $i$
- $1 \le a_i \le 10^9$ for each valid $i$
- $1 \le b, c \le N$
- $1 \le k \le 10^9$

### Subtasks
**Subtask 1 (10 points):** $N, Q \le 1,000$

**Subtask 2 (35 points):** there are no queries of the first type

**Subtask 3 (55 points):** original constraints

### Example Input
```
5 4
3 1 4 1 5
1 2 4 8 16
2 5 2
1 3 5
2 3 4
2 1 4
```

### Example Output
```
22
13
-1
```

### Explanation

Here is an illustration of the mountain range described in the first sample test case.

![fig1](https://codechef_shared.s3.amazonaws.com/download/Images/JULY20/DRGNDEN/picture.png)

- Query 1: Starting at $p_5$ (height $5$), Chef can glide to $p_3$ (height 4) and then to $p_2$ (height $1$). The total tastiness of this journey is $a_5+a_3+a_2=16+4+2=22$.

![fig2](https://codechef_shared.s3.amazonaws.com/download/Images/JULY20/DRGNDEN/picture1.png) 

- Query 2: The value of $a_3$ is set to $5$.
- Query 3: Chef glides from $p_3$ to $p_4$. The tastiness is $a_3+a_4=5+8=13$.
- Query 4: It is impossible to get from $p_1$ to $p_4$. Even if $h_1 \gt h_4$, to reach $p_4$, Chef would need to fly either upwards or through the mountain, both of which are impossible.

![fig3](https://codechef_shared.s3.amazonaws.com/download/Images/JULY20/DRGNDEN/picture3.png)

![fig4](https://codechef_shared.s3.amazonaws.com/download/Images/JULY20/DRGNDEN/unnamed.png)

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>