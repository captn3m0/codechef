---
{"category_name":"hard","problem_code":"CHEFLST","problem_name":"Chef and Lost Story","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"bciobanu","problem_tester":null,"date_added":"18-08-2018","tags":{"0":"bciobanu","1":"bitmasking","2":"determinant","3":"gaussian","4":"hard","5":"matrix","6":"scwartz","7":"sept18"},"editorial_url":"https://discuss.codechef.com/problems/CHEFLST","time":{"view_start_date":1537176602,"submit_start_date":1537176602,"visible_start_date":1537176602,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Hindi](http://www.codechef.com/download/translated/SEPT18/hindi/CHEFLST.pdf) ,[Bengali](http://www.codechef.com/download/translated/SEPT18/bengali/CHEFLST.pdf) , [Mandarin chinese](http://www.codechef.com/download/translated/SEPT18/mandarin/CHEFLST.pdf) , [Russian](http://www.codechef.com/download/translated/SEPT18/russian/CHEFLST.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SEPT18/vietnamese/CHEFLST.pdf) as well.


Once upon a time, in a land far, far away... nevermind, we don't recall the rest of the story.

All we know is that Chef has a matrix of integers $M$ with $N$ rows and $N$ columns; he wants to take a single element from each row and a single element from each column ($N$ elements in total) and find their [bitwise XOR](https://en.wikipedia.org/wiki/Bitwise_operation#XOR). Find the set of all values he could obtain.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$. 
- $N$ lines follow. For each $i$ ($1 \le i \le N$), the $i$-th of the following lines contains $N$ space-separated integers $M_{i, 1}, M_{i, 2}, \dots, M_{i, N}$.

### Output
For each test case, print a single line containing one or more space-separated integers in increasing order — the obtainable values.

### Constraints 
- $1 \le T \le 7$
- $1 \le N \le 60$
- $0 \le M_{i, j} \le 1,023$ for each valid $i, j$

### Subtasks
**Subtaks #1 (5 points):** $1 \le N \le 10$

**Subtask #2 (20 points):** $1 \le N \le 14$

**Subtaks #3 (5 points):** $0 \le M_{i, j} \le 1$ for each valid $i, j$

**Subtask #4 (70 points):** original constraints

### Example Input
```
1
3
5 9 15
19 7 2
1 0 0
```

### Example Output
```
2 7 9 10 26 28
```

### Explanation
**Example case 1:** We could choose $M_{1, 1} = 5$ and $M_{2, 2} = 7$; since we are only allowed to choose one element from each row and one from each column, we cannot choose anything else from rows 1, 2 and columns 1, 2, so we have to choose $M_{3, 3} = 0$. Their XOR is $5 \oplus 7 \oplus 0 = 2$.

Another combination could be $M_{1, 3} = 15$, $M_{2, 1} = 19$ and $M_{3, 2} = 0$. Their XOR is $15 \oplus 19 \oplus 0 = 28$.
