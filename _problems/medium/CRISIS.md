---
{"category_name":"medium","problem_code":"CRISIS","problem_name":"CPI Crisis","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kr_abhinav","problem_tester":null,"date_added":"1-04-2018","tags":{"0":"kr_abhinav"},"time":{"view_start_date":1522873800,"submit_start_date":1522873800,"visible_start_date":1522873800,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>Naruto has recently joined the Ninja Academy for higher education, while filling the admission form he is required to choose minimum $X$ subjects out of a list of $N$ subjects. He is not very interested in studies but wants to get a good overall CPI. However, every subject has a different weightage/credit. The credit (denoted as $C$<sub>i</sub>) of a particular course is equal to the position in which it appears in the subject list, i.e, the first course has a credit=1, the second course has a credit=2, and so on.
Naruto knows his capabilities, and so he has come up with the scores ($S$<sub>i</sub>)  he can achieve in every course. He wants to maximise his CPI, which can be calculated as the weighted mean of all the subjects taken, denoted as
__Sum(C<sub>i</sub>*S<sub>i</sub>)/Sum(C<sub>i</sub>)__ for all i s.t Naruto has taken up course i

###Input:

- First line will contain $T$, number of testcases. Then the testcases follow. 
- First line of every test case contains two integers, $N$ and $X$
- Next line of the test case contains $N$ space separated integers S<sub>i</sub>, denoting the score he can get in every subject

###Output:
For each testcase, output in a single line the maximum cpi he can get after choosing the subjects. Your output will be considered correct if it has an absolute error of less than 10<sup>-6</sup>.

###Constraints 
- $1 \leq T \leq 10$
- $1 \leq N \leq 1000$
- $1 \leq X \leq N$
- $1 \leq S$<sub>i</sub>$   \leq 10000$

###Sample Input:
1  
5 2  
50 40 30 20 10  


###Sample Output:
43.3333333333

	
###Explanation:
He can achieve the max credit by picking the first two subjects, which produces a CPI of (50 * 1+40 * 2)/(1+2) = 43.333333333