<?php
/**
 * Item Relations
 * @copyright Copyright 2010-2014 Roy Rosenzweig Center for History and New Media
 * @license http://www.gnu.org/licenses/gpl-3.0.txt GNU GPLv3
 */
 
return $formalVocabularies = array(
    array(
        'name' => 'Dublin Core',
        'description' => 'Relations defined by DCMI Metadata Terms: http://dublincore.org/documents/dcmi-terms/',
        'namespace_prefix' => 'dcterms',
        'namespace_uri' => 'http://purl.org/dc/terms/',
        'properties' => array(
            array(
                'local_part' => 'relation',
                'friendly_part' => 'Is Related To',
                'label' => 'Relation',
                'description' => 'A related resource.'
            ),
            array(
                'local_part' => 'conformsTo',
		'friendly_part' => '',
                'label' => 'Conforms To',
                'description' => 'An established standard to which the described resource conforms.'
            ),
            array(
                'local_part' => 'hasFormat',
                'friendly_part' => '',
                'label' => 'Has Format',
                'description' => 'A related resource that is substantially the same as the pre-existing described resource, but in another format.'
            ),
            array(
                'local_part' => 'hasPart',
                'friendly_part' => '',
                'label' => 'Has Part',
                'description' => 'A related resource that is included either physically or logically in the described resource.'
            ),
            array(
                'local_part' => 'hasVersion',
                'friendly_part' => '',
                'label' => 'Has Version',
                'description' => 'A related resource that is a version, edition, or adaptation of the described resource.'
            ),
            array(
                'local_part' => 'isFormatOf',
                'friendly_part' => '',
                'label' => 'Is Format Of',
                'description' => 'A related resource that is substantially the same as the described resource, but in another format.'
            ),
            array(
                'local_part' => 'isPartOf',
                'friendly_part' => '',
                'label' => 'Is Part Of',
                'description' => 'A related resource in which the described resource is physically or logically included.'
            ),
            array(
                'local_part' => 'isReferencedBy',
                'friendly_part' => '',
                'label' => 'Is Referenced By',
                'description' => 'A related resource that references, cites, or otherwise points to the described resource.'
            ),
            array(
                'local_part' => 'isReplacedBy',
                'friendly_part' => '',
                'label' => 'Is Replaced By',
                'description' => 'A related resource that supplants, displaces, or supersedes the described resource.'
            ),
            array(
                'local_part' => 'isRequiredBy',
                'friendly_part' => '',
                'label' => 'Is Required By',
                'description' => 'A related resource that requires the described resource to support its function, delivery, or coherence.'
            ),
            array(
                'local_part' => 'isVersionOf',
                'friendly_part' => '',
                'label' => 'Is Version Of',
                'description' => 'A related resource of which the described resource is a version, edition, or adaptation.'
            ),
            array(
                'local_part' => 'references',
                'friendly_part' => '',
                'label' => 'References',
                'description' => 'A related resource that is referenced, cited, or otherwise pointed to by the described resource.'
            ),
            array(
                'local_part' => 'replaces',
                'friendly_part' => '',
                'label' => 'Replaces',
                'description' => 'A related resource that is supplanted, displaced, or superseded by the described resource.'
            ),
            array(
                'local_part' => 'requires',
                'friendly_part' => '',
                'label' => 'Requires',
                'description' => 'A related resource that is required by the described resource to support its function, delivery, or coherence.'
            ),
            array(
                'local_part' => 'source',
                'friendly_part' => 'Is Sourced From',
                'label' => 'Source',
                'description' => 'A related resource from which the described resource is derived.'
            ),
            array(
                'local_part' => 'abstract',
                'friendly_part' => 'Has Abstract',
                'label' => 'Abstract',
                'description' => 'A summary of the resource.'
            ),
            array(
                'local_part' => 'accessRights',
                'friendly_part' => 'Can Only Be Accessed By',
                'label' => 'Access Rights',
                'description' => 'Information about who can access the resource or an indication of its security status.'
            ),
            array(
                'local_part' => 'accrualMethod',
                'friendly_part' => '',
                'label' => 'Accrual Method',
                'description' => 'The method by which items are added to a collection.'
            ),
            array(
                'local_part' => 'accrualPeriodicity',
                'friendly_part' => '',
                'label' => 'Accrual Periodicity',
                'description' => 'The frequency with which items are added to a collection.'
            ),
            array(
                'local_part' => 'accrualPolicy',
                'friendly_part' => '',
                'label' => 'Accrual Policy',
                'description' => 'The policy governing the addition of items to a collection.'
            ),
            array(
                'local_part' => 'audience',
                'friendly_part' => 'Intended audience',
                'label' => 'Audience',
                'description' => 'A class of entity for whom the resource is intended or useful.'
            ),
            array(
                'local_part' => 'contributor',
                'friendly_part' => 'Was Contributed To By',
                'label' => 'Contributor',
                'description' => 'An entity responsible for making contributions to the resource.'
            ),
            array(
                'local_part' => 'coverage',
                'friendly_part' => 'Covers',
                'label' => 'Coverage',
                'description' => 'The spatial or temporal topic of the resource, the spatial applicability of the resource, or the jurisdiction under which the resource is relevant.'
            ),
            array(
                'local_part' => 'creator',
                'friendly_part' => 'Was Created By',
                'label' => 'Creator',
                'description' => 'An entity primarily responsible for making the resource.'
            ),
            array(
                'local_part' => 'description',
                'friendly_part' => '',
                'label' => 'Description',
                'description' => 'An account of the resource.'
            ),
            array(
                'local_part' => 'educationLevel',
                'friendly_part' => '',
                'label' => 'Audience Education Level',
                'description' => 'A class of entity, defined in terms of progression through an educational or training context, for which the described resource is intended.'
            ),
            array(
                'local_part' => 'extent',
                'friendly_part' => '',
                'label' => 'Extent',
                'description' => 'The size or duration of the resource.'
            ),
            array(
                'local_part' => 'format',
                'friendly_part' => '',
                'label' => 'Format',
                'description' => 'The file format, physical medium, or dimensions of the resource.'
            ),
            array(
                'local_part' => 'instructionalMethod',
                'friendly_part' => '',
                'label' => 'Instructional Method',
                'description' => 'A process, used to engender knowledge, attitudes and skills, that the described resource is designed to support.'
            ),
            array(
                'local_part' => 'language',
                'friendly_part' => 'Is In Language',
                'label' => 'Language',
                'description' => 'A language of the resource.'
            ),
            array(
                'local_part' => 'license',
                'friendly_part' => '',
                'label' => 'License',
                'description' => 'A legal document giving official permission to do something with the resource.'
            ),
            array(
                'local_part' => 'mediator',
                'friendly_part' => 'Access Is Mediated By',
                'label' => 'Mediator',
                'description' => 'An entity that mediates access to the resource and for whom the resource is intended or useful.'
            ),
            array(
                'local_part' => 'medium',
                'friendly_part' => '',
                'label' => 'Medium',
                'description' => 'The material or physical carrier of the resource.'
            ),
            array(
                'local_part' => 'provenance',
                'friendly_part' => 'Has Provenance Information',
                'label' => 'Provenance',
                'description' => 'A statement of any changes in ownership and custody of the resource since its creation that are significant for its authenticity, integrity, and interpretation.'
            ),
            array(
                'local_part' => 'publisher',
                'friendly_part' => 'Is Published By',
                'label' => 'Publisher',
                'description' => 'An entity responsible for making the resource available.'
            ),
            array(
                'local_part' => 'rights',
                'friendly_part' => '',
                'label' => 'Rights',
                'description' => 'Information about rights held in and over the resource.'
            ),
            array(
                'local_part' => 'rightsHolder',
                'friendly_part' => 'Rights Held By',
                'label' => 'Rights Holder',
                'description' => 'A person or organization owning or managing rights over the resource.'
            ),
            array(
                'local_part' => 'spatial',
                'friendly_part' => 'Covers The Area',
                'label' => 'Spatial Coverage',
                'description' => 'Spatial characteristics of the resource.'
            ),
            array(
                'local_part' => 'subject',
                'friendly_part' => 'References The Subject',
                'label' => 'Subject',
                'description' => 'The topic of the resource.'
            ),
            array(
                'local_part' => 'tableOfContents',
                'friendly_part' => '',
                'label' => 'Table Of Contents',
                'description' => 'A list of subunits of the resource.'
            ),
            array(
                'local_part' => 'temporal',
                'friendly_part' => 'Covers The Timeframe',
                'label' => 'Temporal Coverage',
                'description' => 'Temporal characteristics of the resource.'
            ),
            array(
                'local_part' => 'type',
                'friendly_part' => 'Is Of Type',
                'label' => 'Type',
                'description' => 'The nature or genre of the resource.'
            ),
        )
    ),
    array(
        'name' => 'BIBO',
        'description' => 'Relations defined by the Bibliographic Ontology (BIBO): http://bibotools.googlecode.com/svn/bibo-ontology/trunk/doc/index.html',
        'namespace_prefix' => 'bibo',
        'namespace_uri' => 'http://purl.org/ontology/bibo/',
        'properties' => array(
            array(
                'local_part' => 'annotates',
                'friendly_part' => '',
                'label' => 'annotates',
                'description' => 'Critical or explanatory note for a Document.'
            ),
            array(
                'local_part' => 'citedBy',
                'friendly_part' => '',
                'label' => 'cited by',
                'description' => 'Relates a document to another document that cites the first document.'
            ),
            array(
                'local_part' => 'cites',
                'friendly_part' => '',
                'label' => 'cites',
                'description' => 'Relates a document to another document that is cited by the first document as reference, comment, review, quotation or for another purpose.'
            ),
            array(
                'local_part' => 'reviewOf',
                'friendly_part' => '',
                'label' => 'review of',
                'description' => 'Relates a review document to a reviewed thing (resource, item, etc.).'
            ),
            array(
                'local_part' => 'reproducedIn',
                'friendly_part' => '',
                'label' => 'reproduced in',
                'description' => 'The resource in which another resource is reproduced.'
            ),
            array(
                'local_part' => 'affirmedBy',
                'friendly_part' => '',
                'label' => 'affirmed by',
                'description' => 'A legal decision that affirms a ruling.'
            ),
            array(
                'local_part' => 'reversedBy',
                'friendly_part' => '',
                'label' => 'reversed by',
                'description' => 'A legal decision that reverses a ruling.'
            ),
            array(
                'local_part' => 'subsequentLegalDecision',
                'friendly_part' => '',
                'label' => 'subsequent legal decision',
                'description' => 'A legal decision on appeal that takes action on a case (affirming it, reversing it, etc.).'
            ),
            array(
                'local_part' => 'transcriptOf',
                'friendly_part' => '',
                'label' => 'transcript of',
                'description' => 'Relates a document to some transcribed original.'
            ),
            array(
                'local_part' => 'translationOf',
                'friendly_part' => '',
                'label' => 'translation of',
                'description' => 'Relates a translated document to the original document.'
            ),
        )
    ),
    array(
        'name' => 'FOAF',
        'description' => 'Relations defined by the Friend of a Friend vocabulary (FOAF): http://xmlns.com/foaf/spec/',
        'namespace_prefix' => 'foaf',
        'namespace_uri' => 'http://xmlns.com/foaf/0.1/',
        'properties' => array(
            array(
                'local_part' => 'based_near',
                'friendly_part' => '',
                'label' => 'based near',
                'description' => 'A location that something is based near, for some broadly human notion of near.'
            ),
            array(
                'local_part' => 'depiction',
                'friendly_part' => '',
                'label' => 'depiction',
                'description' => 'A depiction of some thing.'
            ),
            array(
                'local_part' => 'depicts',
                'friendly_part' => '',
                'label' => 'depicts',
                'description' => 'A thing depicted in this representation.'
            ),
            array(
                'local_part' => 'fundedBy',
                'friendly_part' => '',
                'label' => 'funded by',
                'description' => 'An organization funding a project or person.'
            ),
            array(
                'local_part' => 'img',
                'friendly_part' => '',
                'label' => 'image',
                'description' => 'An image that can be used to represent some thing (ie. those depictions which are particularly representative of something, eg. one\'s photo on a homepage).'
            ),
            array(
                'local_part' => 'isPrimaryTopicOf',
                'friendly_part' => '',
                'label' => 'is primary topic of',
                'description' => 'A document that this thing is the primary topic of.'
            ),
            array(
                'local_part' => 'knows',
                'friendly_part' => '',
                'label' => 'knows',
                'description' => 'A person known by this person (indicating some level of reciprocated interaction between the parties).'
            ),
            array(
                'local_part' => 'logo',
                'friendly_part' => '',
                'label' => 'logo',
                'description' => 'A logo representing some thing.'
            ),
            array(
                'local_part' => 'made',
                'friendly_part' => '',
                'label' => 'made',
                'description' => 'Something that was made by this agent.'
            ),
            array(
                'local_part' => 'maker',
                'friendly_part' => '',
                'label' => 'maker',
                'description' => 'An agent that made this thing.'
            ),
            array(
                'local_part' => 'member',
                'friendly_part' => '',
                'label' => 'member',
                'description' => 'Indicates a member of a Group.'
            ),
            array(
                'local_part' => 'page',
                'friendly_part' => '',
                'label' => 'page',
                'description' => 'A page or document about this thing.'
            ),
            array(
                'local_part' => 'primaryTopic',
                'friendly_part' => '',
                'label' => 'primary topic',
                'description' => 'The primary topic of some page or document.'
            ),
            array(
                'local_part' => 'thumbnail',
                'friendly_part' => '',
                'label' => 'thumbnail',
                'description' => 'A derived thumbnail image.'
            ),
        )
    ),
    array(
        'name' => 'FRBR',
        'description' => 'Relations defined by the Functional Requirements for Bibliographic Records (FRBR): http://vocab.org/frbr/core.html',
        'namespace_prefix' => 'frbr',
        'namespace_uri' => 'http://purl.org/vocab/frbr/core#',
        'properties' => array(
            array(
                'local_part' => 'abridgement',
                'friendly_part' => '',
                'label' => 'abridgement',
                'description' => 'A property representing an abridgment of an expression.'
            ),
            array(
                'local_part' => 'abridgementOf',
                'friendly_part' => '',
                'label' => 'abridgement of',
                'description' => 'A property representing an expression that is abridged.'
            ),
            array(
                'local_part' => 'adaption',
                'friendly_part' => '',
                'label' => 'adaption',
                'description' => 'A property representing an adaption of a work or expression.'
            ),
            array(
                'local_part' => 'adaptionOf',
                'friendly_part' => '',
                'label' => 'adaption of',
                'description' => 'A property representing a work or expression that is adapted.'
            ),
            array(
                'local_part' => 'alternate',
                'friendly_part' => '',
                'label' => 'alternate',
                'description' => 'A property representing an alternative to a manifestation.'
            ),
            array(
                'local_part' => 'alternateOf',
                'friendly_part' => '',
                'label' => 'alternate of',
                'description' => 'A property representing a manifestation that is alternated.'
            ),
            array(
                'local_part' => 'arrangement',
                'friendly_part' => '',
                'label' => 'arrangement',
                'description' => 'A property representing an arrangement of an expression.'
            ),
            array(
                'local_part' => 'arrangementOf',
                'friendly_part' => '',
                'label' => 'arrangement of',
                'description' => 'A property representing an expression that is arranged.'
            ),
            array(
                'local_part' => 'complement',
                'friendly_part' => '',
                'label' => 'complement',
                'description' => 'A property representing a complement to a work or expression.'
            ),
            array(
                'local_part' => 'complementOf',
                'friendly_part' => '',
                'label' => 'complement of',
                'description' => 'A property representing a work or expression that is complemented.'
            ),
            array(
                'local_part' => 'creator',
                'friendly_part' => '',
                'label' => 'creator',
                'description' => 'A property representing an entity in some way responsible for the creation of a work.'
            ),
            array(
                'local_part' => 'creatorOf',
                'friendly_part' => '',
                'label' => 'creator of',
                'description' => 'A property representing a work that was in some way created by of an entity.'
            ),
            array(
                'local_part' => 'embodiment',
                'friendly_part' => '',
                'label' => 'embodiment',
                'description' => 'A property representing a manifestation that embodies an expression.'
            ),
            array(
                'local_part' => 'embodimentOf',
                'friendly_part' => '',
                'label' => 'embodiment of',
                'description' => 'A property representing an expression that is embodied by a manifestation.'
            ),
            array(
                'local_part' => 'exemplar',
                'friendly_part' => '',
                'label' => 'exemplar',
                'description' => 'A property representing an item that is an exemplar of a manifestation.'
            ),
            array(
                'local_part' => 'exemplarOf',
                'friendly_part' => '',
                'label' => 'exemplar of',
                'description' => 'A property representing the manifestation that is exemplified by a item.'
            ),
            array(
                'local_part' => 'imitation',
                'friendly_part' => '',
                'label' => 'imitation',
                'description' => 'A property representing an imitation of a work or expression.'
            ),
            array(
                'local_part' => 'imitationOf',
                'friendly_part' => '',
                'label' => 'imitation of',
                'description' => 'A property representing a work or expression that is imitated.'
            ),
            array(
                'local_part' => 'owner',
                'friendly_part' => '',
                'label' => 'owner',
                'description' => 'A property representing an entity that owns an item.'
            ),
            array(
                'local_part' => 'ownerOf',
                'friendly_part' => '',
                'label' => 'owner of',
                'description' => 'A property representing an item that is in some way owned an entity.'
            ),
            array(
                'local_part' => 'part',
                'friendly_part' => '',
                'label' => 'part',
                'description' => 'A property representing a part of an endeavour.'
            ),
            array(
                'local_part' => 'partOf',
                'friendly_part' => '',
                'label' => 'part of',
                'description' => 'A property representing an endeavour incorporating an endeavour.'
            ),
            array(
                'local_part' => 'producer',
                'friendly_part' => '',
                'label' => 'producer',
                'description' => 'A property representing an entity in some way responsible for producing a manifestation.'
            ),
            array(
                'local_part' => 'producerOf',
                'friendly_part' => '',
                'label' => 'producer of',
                'description' => 'A property representing a manifestation that was in some way produced an entity.'
            ),
            array(
                'local_part' => 'realization',
                'friendly_part' => '',
                'label' => 'realization',
                'description' => 'A property representing an expression that is an intellectual or artistic realization of a work.'
            ),
            array(
                'local_part' => 'realizationOf',
                'friendly_part' => '',
                'label' => 'realization of',
                'description' => 'A property representing the work that has been realized by an expression.'
            ),
            array(
                'local_part' => 'realizer',
                'friendly_part' => '',
                'label' => 'realizer',
                'description' => 'A property representing an entity in some way responsible for realizing an expression.'
            ),
            array(
                'local_part' => 'realizerOf',
                'friendly_part' => '',
                'label' => 'realizer of',
                'description' => 'A property representing an expression that was in some way realized by an entity.'
            ),
            array(
                'local_part' => 'reconfiguration',
                'friendly_part' => '',
                'label' => 'reconfiguration',
                'description' => 'A property representing a recongifuration of an item.'
            ),
            array(
                'local_part' => 'reconfigurationOf',
                'friendly_part' => '',
                'label' => 'reconfiguration of',
                'description' => 'A property representing an item that is reconfigured.'
            ),
            array(
                'local_part' => 'relatedEndeavour',
                'friendly_part' => '',
                'label' => 'related endeavour',
                'description' => 'A property representing another endeavour that is related in some way to an endeavour.'
            ),
            array(
                'local_part' => 'reproduction',
                'friendly_part' => '',
                'label' => 'reproduction',
                'description' => 'A property representing a reproduction of a manifestation or item.'
            ),
            array(
                'local_part' => 'reproductionOf',
                'friendly_part' => '',
                'label' => 'reproduction of',
                'description' => 'A property representing a manifestation or item that is reproduced.'
            ),
            array(
                'local_part' => 'responsibleEntity',
                'friendly_part' => '',
                'label' => 'responsible entity',
                'description' => 'A property representing an entity in some way responsible for an endeavour.'
            ),
            array(
                'local_part' => 'responsibleEntityOf',
                'friendly_part' => '',
                'label' => 'responsible entity of',
                'description' => 'A property representing an endeavour that is the responsibility of an entity.'
            ),
            array(
                'local_part' => 'revision',
                'friendly_part' => '',
                'label' => 'revision',
                'description' => 'A property representing a revision of an expression.'
            ),
            array(
                'local_part' => 'revisionOf',
                'friendly_part' => '',
                'label' => 'revision of',
                'description' => 'A property representing an expression that is revised.'
            ),
            array(
                'local_part' => 'successor',
                'friendly_part' => '',
                'label' => 'successor',
                'description' => 'A property representing a successor to a work or expression.'
            ),
            array(
                'local_part' => 'successorOf',
                'friendly_part' => '',
                'label' => 'successor of',
                'description' => 'A property representing a work or expression that is succeeded.'
            ),
            array(
                'local_part' => 'summarization',
                'friendly_part' => '',
                'label' => 'summarization',
                'description' => 'A property representing a summarization of a work or expression.'
            ),
            array(
                'local_part' => 'summarizationOf',
                'friendly_part' => '',
                'label' => 'summarization of',
                'description' => 'A property representing a work or expression that is summarized.'
            ),
            array(
                'local_part' => 'supplement',
                'friendly_part' => '',
                'label' => 'supplement',
                'description' => 'A property representing a supplement to a work or expression.'
            ),
            array(
                'local_part' => 'supplementOf',
                'friendly_part' => '',
                'label' => 'supplement of',
                'description' => 'A property representing a work or expression that is supplemented.'
            ),
            array(
                'local_part' => 'transformation',
                'friendly_part' => '',
                'label' => 'transformation',
                'description' => 'A property representing a transformation of a work or expression.'
            ),
            array(
                'local_part' => 'transformationOf',
                'friendly_part' => '',
                'label' => 'transformation of',
                'description' => 'A property representing a work or expression that is transformed.'
            ),
            array(
                'local_part' => 'translation',
                'friendly_part' => '',
                'label' => 'translation',
                'description' => 'A property representing a translation of an expression.'
            ),
            array(
                'local_part' => 'translationOf',
                'friendly_part' => '',
                'label' => 'translation of',
                'description' => 'A property representing an expression that is translated.'
            ),
        )
    ),
);