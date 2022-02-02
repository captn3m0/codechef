---
{"category_name":"easy","problem_code":"GARGOYLE","problem_name":"Return of the Gargoyle King","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"panik","problem_tester":null,"date_added":"25-12-2018","tags":{"0":"easy","1":"enigma","2":"panik","3":"panik","4":"pelt2019"},"time":{"view_start_date":1547476200,"submit_start_date":1547476200,"visible_start_date":1547476200,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>There has been yet another murder in the Shady city of Riverdale. This murder is being investigated by none other than the Riverdale's Finest- *Jughead Jones & Betty Cooper*. This murder has been done exactly in the same manner as all the murders happening since the return of the deadly game *Gargoyle &Griffins*. Betty has decided to put an end to these murders, so they decide to interrogate each and every person in the neighbourhood.

As they don't know these people personally they want to first get to know about their character i.e whether a particular person is a $Truth-speaking-person$ or a $False-speaking-person$. Jughead devises a strategy of interrogating the civilians.

Jughead decides that they will collect statements from all the people in the neighbourhood about every other person living in the neighbourhood. Each person speaks a statement in form of an array consisting of $T$ and $ F$, which tells us what he thinks about the $ith$ person. Let there be $N$ people living in the neighbourhood. So if a person $i$ is giving his/her statement, he/her will always call himself/herself a True person i.e $Statement[i]=T$.
So Jughead says that they will select the $maximum$ $number$ of people that maybe speaking the truth such that their statements don't contradict and then interrogate them further about the murder.
Help them pick the max no. of Truth speaking people.

$Note$- A person speaking $falsely$ doesn't mean that the complement of his statement would be the $truth$. If a person is declared $false$(i.e not included in the set) after Betty and Jughead pick their set of truth speaking people with non-contradicting statements, the person declared false might not be speaking $falsely$ about anyone(except saying he himself is a $true$ speaking person which contradicts with the selected statements) but since the selected Set of statements feels him to be a $false$ speaking person he won't be included in the set. 

But if a person is tagged as $truth$ speaking person then their Statement must be entirely correct and should not contradict with the chosen set of $truth$ speaking people. All $truth$ speaking people mentioned in the selected statements should be part of the set and all the people declared $false$ in the statements shouldn't be part of the set.
See example for clarity.

###Input:

- First line will contain $N$, the number of people in the neighbourhood. Then the Statements of $ith$ person follow. 
- Each Statement contains a single line of input, an array of length $N$ consisting of $T$ and $F$.

###Output:
Print a single line denoting the maximum no. of people that might be speaking the truth.

###Constraints 
- $1 \leq N \leq 1000$
- $Statement$<sub>$i$</sub>$[i]=T$

###Sample Input1:
5

T T F F F

T T F F F

T T T F F

F F F T T

F F F T T

###Sample Output1:
	2

###Sample Input2:
3

T T T

T T T

F F T

###Sample Output2:
	1
	
###EXPLANATION:
In Sample 1
We can consider the $1st$ and $2nd$ person to be speaking the truth. We can also consider the $4th$ and the $5th$ person to be speaking the truth. 
$Note$: we cannot select $1st$ $2nd$ and $3rd$ person because the $1st$ and the second person have labelled the 3rd person as a false speaking person, therefore if we select all 3 contradiction will arise.

In sample 2
Set contains only the 3rd person