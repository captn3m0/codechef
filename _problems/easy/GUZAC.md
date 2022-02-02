---
{"category_name":"easy","problem_code":"GUZAC","problem_name":"GukiZ and Candies","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"allllekssssa","problem_tester":null,"date_added":"12-08-2018","tags":{"0":"allllekssssa","1":"cook","2":"cook97","3":"greedy","4":"math","5":"taran_1407"},"editorial_url":"https://discuss.codechef.com/problems/GUZAC","time":{"view_start_date":1534703400,"submit_start_date":1534703400,"visible_start_date":1534703400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a <a href="http://www.codechef.com/download/translated/COOK97/mandarin/GUZAC.pdf" target="_blank">Mandarin chinese</a>
, <a href="http://www.codechef.com/download/translated/COOK97/russian/GUZAC.pdf" target="_blank">Russian</a> and <a href="http://www.codechef.com/download/translated/COOK97/vietnamese/GUZAC.pdf" target="_blank">Vietnamese</a> as well.</h3>

Professor GukiZ decided to distribute all of his candies to his $N$ students (numbered $1$ through $N$). Let's denote the number of candies GukiZ gave to the $i$-th student by $p_i$. As GukiZ has a lot of students, he does not remember all the exact numbers of candies he gave to the students. He only remembers the following properties of the sequence $p$:
- The numbers of candies given to each of the first $K$ students ($p_1, p_2, \dots, p_K$) are known exactly.
- All elements of the sequence $p$ are distinct.
- The difference between the maximum and minimum element of the sequence $p$ does not exceed $x$.
- The professor gave out the biggest possible total number of candies, i.e. $S = p_1 + p_2 + p_3 + \ldots + p_N$ is maximum possible.

Normally, professors never lie, so the information provided by GukiZ is valid and there is at least one sequence that satisfies all conditions. GukiZ would like to know the total number of candies $S$ he had at the beginning. Can you help him find this number?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains three space-separated integers $N$, $K$ and $x$.
- The second line contains $K$ space-separated integers $p_1, p_2, \dots, p_K$.

### Output
For each test case, print a single line containing one integer — the number of candies GukiZ had.

### Constraints
- $1 \le T \le 50$
- $1 \le N \le 10^9$
- $1 \le K \le \mathrm{min}(N, 2 \cdot 10^4)$ 
- $0  \le x \le 10^9$
- $1 \le p_i \le 10^9$ for each valid $i$
- there is at least one valid distribution of candies to students

### Example Input
```
2
4 3 4 
2 1 5
2 2 9
3 6
```

### Example Output
```
12
9
```

### Explanation
**Example case 1:** There are four students. We know that the first student got $p_1 = 2$ candies, the second student got $p_2 = 1$ and the third got $p_3 = 5$ candies; we don't know the number of candies given to the last student. The difference between the maximum and minimum number of candies given to students is already $5-1 = 4 = x$, so the fourth student could only have been given between $1$ and $5$ candies. It can't be $5$ either, so we maximize the number of candies if we give $4$ candies to the fourth student. In total, there are $2 + 1 + 5 + 4 = 12$ candies.

**Example case 2:** We know the number of candies given to each of the two students, so we know that GukiZ had $3 + 6 = 9$ candies. 
