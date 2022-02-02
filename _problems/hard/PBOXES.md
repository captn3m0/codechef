---
{"category_name":"hard","problem_code":"PBOXES","problem_name":"Pretty Boxes","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"gamegame","problem_tester":null,"date_added":"13-10-2019","tags":{"0":"challenge","1":"data","2":"gamegame","3":"min","4":"nov19","5":"segment","6":"watcher"},"problem_difficulty_level":"Hard","best_tag":"Segment Tree","editorial_url":"https://discuss.codechef.com/problems/PBOXES","time":{"view_start_date":1573464602,"submit_start_date":1573464602,"visible_start_date":1573464602,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=PBOXES","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/NOV19/hindi/PBOXES.pdf), [Bengali](https://www.codechef.com/download/translated/NOV19/bengali/PBOXES.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/NOV19/mandarin/PBOXES.pdf), [Russian](https://www.codechef.com/download/translated/NOV19/russian/PBOXES.pdf), and [Vietnamese](https://www.codechef.com/download/translated/NOV19/vietnamese/PBOXES.pdf) as well.

Taeyeon has a large collection of $N$ pretty boxes (numbered $1$ through $N$). For each valid $i$, the $i$-th box has two attributes $S_i$ and $P_i$, representing the size and beauty of the box respectively, and it can fit inside each box $j$ such that $S_i \le S_j$. (Don't ask why a box can fit into another box with the same size.)

Yoona's birthday is coming very soon, so Taeyeon decided to give Yoona some boxes as birthday gifts. As it is not cool to gift empty boxes, Taeyeon decided to put boxes inside boxes. Specifically, Taeyeon wants to choose $K$ pairs of boxes (for some valid $K$) and for each pair, put one box inside the other (if they have the same size, she can choose which box should be inside; otherwise, she puts the smaller box inside the bigger one). For each pair of boxes $(i, j)$ such that box $i$ is inside box $j$, the beauty of this pair is $P_j - P_i$, since Taeyeon would think the beauty of the inner box is wasted.

Unboxing boxes is very tiring, so it is possible that Yoona does not want many pairs of boxes, and Taeyeon does not know the ideal value of $K$. Therefore, for each $K$ between $1$ and $\left\lfloor\frac{N}{2}\right\rfloor$, you need to help Taeyeon find the maximum possible total beauty she could obtain using at most $K$ pairs of boxes (the maximum possible sum of beauties of these pairs).

### Input
- The first line of the input contains a single integer $N$.
- $N$ lines follow. For each valid $i$, the $i$-th of these lines contains two space-separated integers $S_i$ and $P_i$.

### Output
Print $\left\lfloor\frac{N}{2}\right\rfloor$ lines. For each valid $i$, the $i$-th of these lines should contain a single integer ― the maximum beauty for at most $i$ pairs. 

### Constraints
- $1 \le N \le 2 \cdot 10^5$
- $1 \le S_i \le 2 \cdot 10^5$ for each valid $i$
- $1 \le P_i \le 10^9$ for each valid $i$

### Subtasks
**Subtask #1 (20 points):** $N \le 100$

**Subtask #2 (30 points):** $N \le 3,000$

**Subtask #3 (50 points):** original constraints

### Example Input 1
```
3
1 4
3 1
4 5
```

### Example Output 1
```
4
```

### Example Input 2
```
5
1 4
1 5
1 3
3 4
3 1
```

### Example Output 2
```
3
5
```

### Example Input 3
```
5
1 85
1 306
1 345
1 107
1 193
```

### Example Output 3
```
260
459
```

### Example Input 4
```
4
1 1
2 3
3 2
4 4
```

### Example Output 4
```
3
4
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>