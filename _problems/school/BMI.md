---
{"category_name":"school","problem_code":"BMI","problem_name":"Body Mass Index","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"10-02-2021","tags":{"0":"cakewalk","1":"ccrc2021","2":"daanish_adm"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/BMI","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=BMI","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/CCRC2021/hindi/BMI.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/CCRC2021/mandarin/BMI.pdf), [Vietnamese](https://www.codechef.com/download/translated/CCRC2021/vietnamese/BMI.pdf), and [Bengali](https://www.codechef.com/download/translated/CCRC2021/bengali/BMI.pdf) as well.

You are given the height $H$ (in metres) and mass $M$ (in kilograms) of Chef. The Body Mass Index (BMI) of a person is computed as $\frac{M}{H^2}$.

Report the category into which Chef falls, based on his BMI:

- Category 1: Underweight if BMI $\leq 18$
- Category 2: Normal weight if BMI $\in \{19$, $20$,$\ldots$, $24\}$
- Category 3: Overweight if BMI $\in \{25$, $26$,$\ldots$, $29\}$
- Category 4: Obesity if BMI $\geq 30$

###Input:

- The first line of input will contain an integer, $T$, which denotes the number of testcases. Then the testcases follow. 
- Each testcase contains a single line of input, with two space separated integers, $M, H$, which denote the mass and height of Chef respectively. 

###Output:
For each testcase, output in a single line, $1, 2, 3$ or $4$, based on the category in which Chef falls.

###Constraints 
- $1 \leq T \leq 2*10^4$
- $1 \leq M \leq 10^4$
- $1 \leq H \leq 10^2$
- Its guaranteed that $H^2$ divides $M$.

###Sample Input:
```
3
72 2
80 2
120 2
```

###Sample Output:
```
1
2
4
```
	
###Explanation:
**Case 1:** Since $\frac{M}{H^2} = \frac{72}{2^2} = 18$, therefore person falls in category $1$.

**Case 2:** Since $\frac{M}{H^2} = \frac{80}{2^2} = 20$, therefore person falls in category $2$.

**Case 3:** Since $\frac{M}{H^2} = \frac{120}{2^2} = 30$, therefore person falls in category $4$.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>