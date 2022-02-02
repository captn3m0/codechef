---
{"category_name":"medium","problem_code":"CALCULUS","problem_name":"Calculus","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":1,"output":2,"explanation":"","isDeleted":false}}},"video_editorial_url":"https://youtu.be/qeQQykj5tAg","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"ildar_adm","problem_tester":"","date_added":"29-11-2020","tags":{"0":"dec20","1":"ildar_adm","2":"integral","3":"math","4":"medium"},"problem_difficulty_level":"Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/CALCULUS","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CALCULUS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/DEC20/hindi/CALCULUS.pdf), [Bengali](https://www.codechef.com/download/translated/DEC20/bengali/CALCULUS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/DEC20/mandarin/CALCULUS.pdf), [Russian](https://www.codechef.com/download/translated/DEC20/russian/CALCULUS.pdf), and [Vietnamese](https://www.codechef.com/download/translated/DEC20/vietnamese/CALCULUS.pdf) as well.

You are given one positive integer $N$. Calculate
$$\int_{0}^{\infty} \frac{e^{2 \pi x} - 1}{e^{2 \pi x} + 1} \left(\frac{1}{x} - \frac{x}{N^2 + x^2}\right) \,\mathrm{d}x \,.$$

It is possible to prove that its value can be written as a fraction $\frac{a}{b}$, where $a$ and $b$ are positive integers and $b$ is coprime with $998,244,353$. You need to find $a \cdot b^{-1}$ modulo $998,244,353$, where $b^{-1}$ denotes the multiplicative inverse of $b$ modulo $998,244,353$.

### Input
The first and only line of the input contains a single integer $N$.

### Output
Print a single line containing one integer $a \cdot b^{-1}$ modulo $998,244,353$.

### Constraints 
- $1 \le N \le 10^6$

### Subtasks
**Subtask #1 (1 point):** $N = 2$

**Subtask #2 (1 point):** $N = 3$

**Subtask #3 (98 points):** original constraints

### Example Input
```
1
```

### Example Output
```
2
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>