---
{"category_name":"easy","problem_code":"CIRCLES2","problem_name":"Two Circles","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"17-08-2019","tags":{"0":"cook109","1":"easy","2":"geometry","3":"kingofnumbers","4":"taran_1407","5":"trigonometry"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/CIRCLES2","time":{"view_start_date":1566153002,"submit_start_date":1566153002,"visible_start_date":1566153002,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CIRCLES2","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK109/hindi/CIRCLES2.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK109/mandarin/CIRCLES2.pdf), [Russian](https://www.codechef.com/download/translated/COOK109/russian/CIRCLES2.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK109/vietnamese/CIRCLES2.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK109/bengali/CIRCLES2.pdf) as well.

There are two circles in a plane. The radius of the first circle is $R_1$, while the radius of the second circle is $R_2$. The coordinates of the centre of the first circle are $(X_1, Y_1)$, while the coordinates the centre of the second circle are $(X_2, Y_2)$.

Consider all points $P$ with the following properties:
- $P$ lies strictly inside the first circle or on its perimeter.
- $P$ lies strictly outside the second circle.

Determine whether at least one point with these properties exists. If it exists, find one such point.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains six space-separated integers $X_1$, $Y_1$, $R_1$, $X_2$, $Y_2$ and $R_2$.

### Output
For each test case, print a line containing the string `"YES"` if there is a point $P = (X, Y)$ with the given properties or `"NO"` otherwise. If there is such a point, print a second line containing two space-separated real numbers $X$ and $Y$.

The coordinates $X$ and $Y$ will be considered correct if the distance of the point $(X, Y)$ from the centre of the first circle is at most $R_1 + 10^{-6}$ and its distance from the centre of the second circle is at least $R_2 - 10^{-6}$. Note that these conditions are not used to check the existence of the answer, their only purpose is to check the correctness of the coordinates $X$ and $Y$ with floating point precision.

### Constraints
- $1 \le T \le 100,000$
- $|X_1|, |Y_1|, |X_2|, |Y_2| \le 10^6$
- $1 \le R_1, R_2 \le 10^6$

### Example Input
```
3
0 0 2 0 0 3
5 5 1 0 0 1
0 1 1 0 2 2
```

### Example Output
```
NO
YES
5.0000000 5.0000000
NO
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>