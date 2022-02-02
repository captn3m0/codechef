---
{"category_name":"hard","problem_code":"POLICE","problem_name":"Police and Thieves","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\n1 1\n10 10\n20 20","output":2,"explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"erfaniaa","problem_tester":null,"date_added":"24-07-2019","tags":{"0":"convex","1":"corner","2":"erfaniaa","3":"geometry","4":"ltime74","5":"medium"},"problem_difficulty_level":"Medium","best_tag":"Convex Hull","editorial_url":"https://discuss.codechef.com/problems/POLICE","time":{"view_start_date":1564246800,"submit_start_date":1564246800,"visible_start_date":1564246800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=POLICE","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME74/hindi/POLICE.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME74/bengali/POLICE.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME74/mandarin/POLICE.pdf), [Russian](https://www.codechef.com/download/translated/LTIME74/russian/POLICE.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME74/vietnamese/POLICE.pdf) as well.

There are $N$ police officers numbered $1$ through $N$ and $M$ thieves numbered $1$ through $M$. All people (police officers and thieves) are points in a Cartesian plane. Let's denote the coordinates of the $i$-th officer by $(Xp_i, Yp_i)$, and the coordinates of the $i$-th thief by $(Xt_i, Yt_i)$.

A thief is *arrested* if there is a subset of police officers which form a convex polygon such that the thief is located strictly inside that polygon.

The police station wants to send reinforcements ― zero or more police officers ― to make sure all the thieves are arrested. The coordinates of these additional officers may be chosen arbitrarily (they may be any real numbers); it is not allowed to move the officers which were present initially. Calculate the minimum number of police officers that need to be sent as reinforcements in order to arrest all the thieves.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $M$.
- $N$ lines follow. For each $i$ ($1 \le i \le N$), the $i$-th of these lines contains two space-separated integers $Xp_i$ and $Yp_i$.
- $M$ more lines follow. For each $i$ ($1 \le i \le M$), the $i$-th of these lines contains two space-separated integers $Xt_i$ and $Yt_i$.

### Output
For each test case, print a single line containing one integer ― the minimum number of additional police officers.

### Constraints 
- $1 \le T \le 10$
- $0 \le N \le 10^5$
- $1 \le M \le 10^5$
- $|Xp_i|, |Yp_i| \le 2*10^8$ for each valid $i$
- $|Xt_i|, |Yt_i| \le 2*10^8$ for each valid $i$
- no two people (police officers or thieves) have the same position

### Subtasks
**Subtask #1 (40 points):** $N, M \le 1,000$

**Subtask #2 (60 points):** original constraints

### Example Input
```
1
1 1
10 10
20 20
```

### Example Output
```
2
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>