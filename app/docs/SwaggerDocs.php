<?php

namespace App\Docs;

/**
 * @OA\Info(
 *      title="API Gestión de Proyectos - Tech Solutions",
 *      version="1.0.0",
 *      description="Documentación de endpoints de la Evaluación 3"
 * )
 * @OA\Server(
 *      url="http://127.0.0.1:8000",
 *      description="Servidor Local"
 * )
 *
 * @OA\Get(
 *      path="/api/proyectos",
 *      summary="Obtener todos los proyectos",
 *      tags={"Proyectos"},
 *      @OA\Response(response=200, description="Lista de proyectos o arreglo vacío")
 * )
 *
 * @OA\Post(
 *      path="/api/proyectos",
 *      summary="Crear proyecto",
 *      tags={"Proyectos"},
 *      @OA\RequestBody(
 *          required=true,
 *          @OA\JsonContent(
 *              @OA\Property(property="nombre", type="string", example="Proyecto Ejemplo"),
 *              @OA\Property(property="descripcion", type="string", example="Descripción del proyecto"),
 *              @OA\Property(property="fecha_inicio", type="string", format="date", example="2026-09-01"),
 *              @OA\Property(property="fecha_fin", type="string", format="date", example="2026-12-31")
 *          )
 *      ),
 *      @OA\Response(response=201, description="Proyecto creado")
 * )
 *
 * @OA\Get(
 *      path="/api/proyectos/{id}",
 *      summary="Obtener proyecto por ID",
 *      tags={"Proyectos"},
 *      @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
 *      @OA\Response(response=200, description="Proyecto encontrado"),
 *      @OA\Response(response=404, description="No encontrado")
 * )
 *
 * @OA\Put(
 *      path="/api/proyectos/{id}",
 *      summary="Actualizar proyecto por ID",
 *      tags={"Proyectos"},
 *      @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
 *      @OA\RequestBody(
 *          required=true,
 *          @OA\JsonContent(
 *              @OA\Property(property="nombre", type="string", example="Proyecto Modificado"),
 *              @OA\Property(property="descripcion", type="string", example="Nueva descripción")
 *          )
 *      ),
 *      @OA\Response(response=200, description="Proyecto actualizado"),
 *      @OA\Response(response=404, description="No encontrado")
 * )
 *
 * @OA\Delete(
 *      path="/api/proyectos/{id}",
 *      summary="Eliminar proyecto por ID",
 *      tags={"Proyectos"},
 *      @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
 *      @OA\Response(response=204, description="Respuesta vacía"),
 *      @OA\Response(response=404, description="No encontrado")
 * )
 */
class SwaggerDocs
{
}